<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class SeoController extends Controller
{

    private $scaned = [];
    private $lastModified;
    private $changeFrequency = 'weekly';
    private $priority = '0.9';
    private $maxDepth = 5;
    private $baseUrl = 'https://educrafter.co';


    public function __construct() {
        $this->lastModified = date('Y-m-d');
    }



    private function blogPage(){

        $website_id = env('WEBSITE_ID');
        $data = Blog::with('Category')->whereHas('Category',function($q){
            $q->where('status', 'active');
        })->where('website_id',$website_id)->get();

        foreach ($data as $blog) {
            $this->scaned[] = $this->baseUrl.'/blog/'.$blog->Category->category_name.'/'.$blog->blog_sku;
        }
        return;
    }


    private function offerPage(){
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://educrafter.co/offers');
        $htmlContent = $response->getBody()->getContents();
        $dom = new \DOMDocument();
        @$dom->loadHTML($htmlContent);
        $anchors = $dom->getElementsByTagName('a');
        foreach ($anchors as $anchor) {
            $href = $anchor->getAttribute('href');
            if (filter_var($href, FILTER_VALIDATE_URL) && !in_array($href, $this->scaned)) {
                $this->scaned[] = $href;  // Add URL to the scanned list
            }
        }
        return;
    }

    public function index()
    {
        $this->blogPage();
        $this->offerPage();
        $url = $this->baseUrl;
        $this->scanUrl($url);
        
        $routesGroups = [];
        foreach($this->scaned as $url){
            if (strstr(parse_url($url,PHP_URL_HOST),'educrafter.co'))
            {
                try{
                $route = app('router')->getRoutes()->match(app('request')->create($url))->getName();
                $routeNameSplit = explode('.',$route);
                $siteMapFile = 'inner-sitemap.xml';
                if($routeNameSplit[0] == 'Services'){
                    $siteMapFile = 'services-sitemap.xml';
                }else if($routeNameSplit[0] == 'Tutors' || $routeNameSplit[0] == 'Expert'){
                    $siteMapFile = 'tutor-sitemap.xml';
                }
                else if($routeNameSplit[0] == 'Offers'){
                    $siteMapFile = 'offers-sitemap.xml';
                }
                else if($routeNameSplit[0] == 'blog'){
                    $siteMapFile = 'blog-sitemap.xml';
                }
                $routesGroups[$siteMapFile][] = $url;
                }catch(\Exception $e){

                }
            }
        }

        $filesArray = $this->generateSitemapFile($routesGroups);
        $fileName = 'sitemap.xml';
        $filePath = public_path($fileName);
        $fo = fopen ($filePath, "w");
        $content = '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach($filesArray as $file){
            $fileUrl = $this->baseUrl.'/'.$file;
            $content .= '<sitemap>
                <loc>'.$fileUrl.'</loc>
                <lastmod>'.$this->lastModified.'</lastmod>
            </sitemap>';
        }
        $content .= '</sitemapindex>';
        fwrite ($fo,$content);
        fclose ($fo);
        return redirect($this->baseUrl.'/'.$fileName);
    }


    private function scanUrl($url, $depth = 0)
    {
        if ($depth > $this->maxDepth) {
            return;
        }
        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->get($url);
            $htmlContent = $response->getBody()->getContents();
        } catch (\Exception $e) {
            echo "Error fetching URL $url: " . $e->getMessage();
            return;
        }
        $dom = new \DOMDocument();
        @$dom->loadHTML($htmlContent);
        $anchors = $dom->getElementsByTagName('a');
        foreach ($anchors as $anchor) {
            $href = $anchor->getAttribute('href');
            if (filter_var($href, FILTER_VALIDATE_URL) && !in_array($href, $this->scaned)) {
                $this->scaned[] = $href;  // Add URL to the scanned list
                //echo "Scanning: $href" . PHP_EOL;
                $this->scanUrl($href, $depth + 1);
            }
        }
        return;
    }

    public function generateSitemapFile($routesGroups)
    {
        $fileArray = [];
        foreach($routesGroups as $fileName=>$routes){
            
            $file = public_path($fileName);
            $fileArray[] = $fileName;
            $fo = fopen ($file, "w");
            $content = '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
            foreach($routes as $url){
                $content .= '<sitemap>
                    <loc>'.$url.'</loc>
                    <changefreq>'.$this->changeFrequency.'</changefreq>
                    <priority>'.$this->priority.'</priority>
                </sitemap>';
            }
            $content .= '</sitemapindex>';
            fwrite ($fo,$content);
            fclose ($fo);
        }
        return $fileArray;
    }


    


}