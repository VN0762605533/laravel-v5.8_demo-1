@extends('layouts.app')

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
	<div id="homepage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="newsfeed">

						<div class="newsfeed-card card spring-fever mt-5">
							<div class="auth d-flex">
								<div class="avt-auth">
									<img src="https://picsum.photos/200" class="avt-auth-newsfeed" alt="">
								</div>
								<span>Username</span>
							</div>
							<div class="title-content">
							    <h3><a href="#">10 inspiring photos</a></h3>
							    <div class="intro"> <a href="#">Inspiration</a> </div>
							</div>
							<div class="card-image-newsfeed">
								<div class="utility-info">
								    <ul class="utility-list">
								      <li><span class="licon icon-like"></span><a href="#">2</a></li>
								      <li><span class="licon icon-com"></span><a href="#">12</a></li>
								      <li><span class="licon icon-dat"></span>03 jun 2017</li>
								      <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
								    </ul>
								</div>
								<img src="" alt="">
							</div>
							<div class="card-footer">
								<div class="card-info">
								    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim... 
								    <a href="#">Read Article<span class="licon icon-arr icon-black"></span></a>
								</div>
							</div>
						</div><!-- /.blog-card -->

					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
@endsection
