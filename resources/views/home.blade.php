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

						<div class="card mt-5" style="--background:#3C3B3D; --text:white;">
						  <div class="multi-button"><!--Don't need to say how many buttons there will be, handled on lines 42-93-->
						    <button class="fas fa-heart"></button>
						    <button class="fas fa-comment"></button>
						    <button class="fas fa-share-alt"></button>
						    <button class="fas fa-trash"></button>
						  </div>
						  <div class="container">
						  </div>
						</div>

						<!--  -->
						<div id="craete-post mt-5 w-100">
							<div class="card">
								<!-- <input type="text" class="" rows="10" id="task-textarea"> -->
								<textarea id="task-textarea" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
							</div>
						</div>
						<!--  -->

						<div class="blog-card mt-3">
						    <div class="meta">
						      <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
						      <ul class="details">
						        <li class="author"><a href="#">John Doe</a></li>
						        <li class="date">Aug. 24, 2015</li>
						        <li class="tags">
						          <ul>
						            <li><a href="#">Learn</a></li>
						            <li><a href="#">Code</a></li>
						            <li><a href="#">HTML</a></li>
						            <li><a href="#">CSS</a></li>
						          </ul>
						        </li>
						      </ul>
						    </div>
						    <div class="description">
						      <h1>Learning to Code</h1>
						      <h2>Opening a door to the future</h2>
						      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
						      <p class="read-more">
						        <a href="#">Read More</a>
						      </p>
						    </div>
						</div>

						<div class="blog-card mt-3">
							<div class="meta">
								<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
								<ul class="details">
									<li class="author"><a href="#">Jane Doe</a></li>
									<li class="date">July. 15, 2015</li>
									<li class="tags">
										<ul>
											<li><a href="#">Learn</a></li>
											<li><a href="#">Code</a></li>
											<li><a href="#">JavaScript</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="description">
								<h1>Mastering the Language</h1>
								<h2>Java is not the same as JavaScript</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
								<p class="read-more">
									<a href="#">Read More</a>
								</p>
							</div>
						</div>

						<!-- <div class="newsfeed-card card spring-fever mt-5">
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
						</div> --><!-- /.blog-card -->

					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>

@endsection

@push('scripts')
	<!-- <script>
	    ClassicEditor
	        .create( document.querySelector( '#task-textarea' ) )
	        .catch( error => {
	            console.error( error );
	        } );
	</script> -->
	<script>
		CKEDITOR.replace('task-textarea', options);
  	</script>

@endpush