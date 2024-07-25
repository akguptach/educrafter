@extends('layout.auth')
@section('content')

<style>
.title-heading{
    font-size: 36px;
    margin-bottom: 20px;
    text-align: center;
}
.label-text{
    font-size: 18px;
    font-weight: 600;
    line-height: 1;
    margin-bottom: 10px;
}

.input-text{
    width: 100%;
    padding: 14px 20px;
    font-size: 16px;
    color: #000;
    border: 1px solid #000;
    background: var(--tg-common-color-white);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    line-height: 1;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    
}
</style>

 <!-- main-area -->
    <main class="main-area fix" style="background:  #FFF4E4;">
	
	
	  <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
						    <div align="center" style="margin-bottom: 25px;"><a href="{{ route('home') }}"><img src="{{ asset('img/Logo.png')}}" alt="img" style="text-align: center;width: 38%;"></a></div>
                            @livewire('reset-password')
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
		

	   
    </main>

@endsection
    