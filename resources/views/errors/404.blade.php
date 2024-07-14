@extends('layout.app')
@section('content')
<style>

/*======================
    404 page
=======================*/

.flex-shrink-0{ margin-top:0px !important;}
.page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url('{{ asset('img/404.gif')}}');
    height: 400px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
			 font-size:80px;
			 }
			 
			 .link_404{			 
	color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}
	.navmenu{display:none !important;}
</style>
<!-- main-area -->
    <main class="main-area fix">
	<section class="error-area">
	        <div class="container">
					<div class="row justify-content-center">	
					<div class="col-sm-12 ">
						<div class="error-wrap text-center">
							<div class="four_zero_four_bg">
								<h1 class="text-center " style="font-family: 'Arvo', serif">404</h1>
							
							
							</div>
						
						
						<div class="error-content contant_box_404">
                                <h2 class="title">Oops, That page doesn't exist.<span>The page you are looking for doesn't exist or has been moved.</span></h2>
                                <div class="tg-button-wrap">
                                    <a href="{{route('home')}}" class="btn arrow-btn">Go To Home Page <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none" data-inject-url="https://html.themegenix.com/skillgro/assets/img/icons/right_arrow.svg" class="injectable">
<path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg></a>
                                </div>
                            </div>
						</div>
					</div>
					</div>
			</div>
            
        </section>
    </main>
@endsection    