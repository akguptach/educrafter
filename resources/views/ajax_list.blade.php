<div class="row">
    @if($blogs && count($blogs) > 0)
    @foreach($blogs as $blog)
    @if($blog->category && $blog->category->category_name)

    @php($titleUrl = $blog['blog_sku'])
    <div class="col-sm-4">
        <div class="courses__item shine__animate-item"
            style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
            <div class="courses__item-thumb">
                <a href="{{route('blog.view',['category'=>$blog->category->category_name,'title'=>$titleUrl])}}" class="shine__animate-link">
                    <img src="<?= env('ADMIN_URL').$blog['blog_image'];?>" alt="img"
                        style="border-radius: 6px 6px 0px 0px;">
                </a>
            </div>
            <div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
                <span class="post-tag">{{$blog?->category?->category_name}}</span>
                <h5 class="title"><a href="{{route('blog.view',['category'=>$blog->category->category_name,'title'=>$titleUrl])}}"><?= $blog['blog_title'];?></a>
                </h5>
                <div class="blog__post-meta">
                    <ul class="list-wrap">
                        <li> {{\Carbon\Carbon::parse($blog->created_at)->format('d-F-Y')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    @else
    <div style="text-align: center;font-size: 16px;">No blog found</div>
    @endif

</div>