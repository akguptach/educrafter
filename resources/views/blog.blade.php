@extends('layout.app')
@section('content')
<style>
.post-tag {
    font-size: 16px;
    font-weight: 400;
    line-height: 1;
    color: #0E0F0C;
    background: #C2E3FB;
    
    padding: 5px 10px;
    border-radius: 4px;
   
}
.courses__item-content .title {
    font-size: 18px;
    font-weight: var(--tg-fw-semi-bold);
    line-height: 1.4;
    margin: 10px 0 10px;
}
.courses__item {
    margin: 0 0 30px;
}
.blog__post-meta {
    margin-top: 20px;
}
.newsletter__form-two .btn {
        background: #FEEAA8;
        color: var(--tg-heading-color);
        width: 200px;
        height: 200px;
        border-radius: 1000px;
        box-shadow: 5px 4px 0px 0px #000000;
    }

    .newsletter__form-two .btn:hover {
        background: #3b71ed;
        color: var(--tg-heading-color);
        width: 200px;
        height: 200px;
        border-radius: 1000px;
        box-shadow: 5px 4px 0px 0px #000000;
    }
</style>
<!-- main-area -->
<main class="main-area fix">

   
   <!-- course-area -->
    <section class="courses-area section-pt-30 section-pb-30" style="background:#fff;border:none;box-shadow:none;">
        <div class="container">
            <div class="section__title-wrap" style="border-bottom: 1px solid #E1E1E1">
                <div class="row">
                    <div class="section__title mb-40">

                        <h2 class="title">Blogs</h2>

                    </div>
                    <div class="col-lg-12">

                        <div class="courses__nav">
                            <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active ajaxLoad" id="all-tab" data-bs-toggle="tab"
                                        data-bs-target="#all-tab-pane" type="button" role="tab"
                                        aria-controls="all-tab-pane" aria-selected="true"
                                        data-cat="All">
                                        All Articles
                                    </button>
                                </li>
                               
                                @foreach($categories as $category)

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link ajaxLoad"
                                        id="{{str_replace(' ','-',strtolower($category->category_name))}}-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#{{str_replace(' ','-',strtolower($category->category_name))}}-pane"
                                        type="button" role="tab"
                                        aria-controls="{{str_replace(' ','-',strtolower($category->category_name))}}-pane"
                                        aria-selected="false" tabindex="-1" data-cat="{{$category->id}}">
                                        {{$category->category_name}}
                                    </button>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="tab-content" id="courseTabContent">
                <div class="tab-pane fade active show" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                    tabindex="0"></div>
                @foreach($categories as $index=>$category)
                
                    <div class="tab-pane fade" id="{{str_replace(' ','-',strtolower($category->category_name))}}-pane" role="tabpanel" aria-labelledby="{{str_replace(' ','-',strtolower($category->category_name))}}"
                    tabindex="{{$index+1}}"></div>
                @endforeach
            </div>




        </div>
    </section>
    <!-- course-area-end -->
    <section class="faq__area section-pt-30 section-pb-30">
        <div class="container">
            <div class="newsletter__inner-wrap newsletter__inner-wrap-two" style="background: #C2E3FB;">
                <img src="{{ asset('img/black star.svg')}}" style="position:Absolute;top:10px;left: 50px;">
                <div style="width:80%">
                    <h2 class="title" style="font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size:8em;">Hire
                        Tutor</h2>
                    <p style="color:#000;font-size:18px;font-weight: 500;">Grade-Boosting Essays: Our Precision Writers
                        Hit Your Academic Target Every Time </p>
                </div>
                <div style="width:20%">
                    <form action="#" class="newsletter__form-two">
                        <button type="submit" class="btn"><img src="{{ asset('img/arrow.png')}}"></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script>
    function loadBlogs(tabId, category = '', keyword = '') {
        $.ajax({
            url: "{{route('Blogs.ajaxList')}}?category=" + category + "&keyword=" + keyword,
            success: function(html) {
                $("#" + tabId).html(html);
            }
        });
    }


    $(document).ready(function() {

        loadBlogs('all-tab-pane');

        $('.ajaxLoad').click(function() {
            var tabId = $(this).attr('aria-controls');
            var cat = $(this).attr('data-cat');
            $("#" + tabId).html('');
            loadBlogs(tabId, cat);
        });


        $('#searchkeyword').change(function() {

            var keyword = $(this).val();
            var tabId = $('.nav-link.active').attr('aria-controls');
            var cat = $('.nav-link.active').attr('data-cat');
            loadBlogs(tabId, cat, keyword);

        });

    })
    </script>
</main>
<!-- main-area-end -->
@endsection