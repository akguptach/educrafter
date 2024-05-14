@extends('layout.app')
@section('content')
    <main class="flex-shrink-0">
        <section class="order-sec">
			<div class="container">
				<div class="row">
					{!!$page->service_description!!}
				</div>
			</div>
		</section>
    </main>
@endsection