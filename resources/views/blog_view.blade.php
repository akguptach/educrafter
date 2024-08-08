@extends('layout.app')
@section('content')
    <main class="main-area fix">
        <section class="blog-details-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog__details-wrapper">
                            <div class="blog__details-thumb">
                                <img src="{{env('ADMIN_URL').$blog->blog_image}}" alt="img">
                            </div>
                            <div class="blog__details-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i> <?= date('d-m-Y',strtotime($blog->blog_date));?></li>
                                        
                                    </ul>
                                </div>
                                <h1 class="title">{{ $blog->blog_title }}</h1>
                                
                                
                                <div class="blog__details-content-inner">
                                    <?= $blog->blog_description;?>
                                </div>
                                
                            </div>
                        </div>
                        
                        
					</div>
                    
			   </div>
            </div>
        </section>
	</main>
@endsection