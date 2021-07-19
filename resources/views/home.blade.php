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

						<!-- <div class="card mt-5" style="--background:#3C3B3D; --text:white;">
						  <div class="multi-button">
						    <button class="fas fa-heart"></button>
						    <button class="fas fa-comment"></button>
						    <button class="fas fa-share-alt"></button>
						    <button class="fas fa-trash"></button>
						  </div>
						  <div class="container">
						  </div>
						</div> -->

						<!--  -->
						<div id="create-post">
							<div class="card my-5">
								<div class="row d-flex justify-content-around m-2">
									<div class="col-md-1">
										<div class="auth d-flex justify-content-center align-items-center">
											<img src="{{ url('img/logo.jpg') }}" alt="" class="img-auth">
										</div>
									</div>
									<div class="col-md-11">
										<form action="{{ url('/stories/stored') }}" method="post">
											@csrf
										<div class="your-content">
											<textarea name="content" cols="40" rows="5" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
										</div>
										<div class="all-buttons mt-2 d-flex justify-content-between">
											<button class="btn btn-outline-secondary"><i class="far fa-images"></i> &nbsp; image</button>
											<button class="btn btn-danger" type="submit"><i class="fas fa-file-import"></i> &nbsp; post</button>
										</div>
										</form>
									</div>
								</div>
								<!-- <input type="text" class="" rows="10" id="task-textarea"> -->
								<!-- <textarea id="task-textarea" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea> -->
							</div>
						</div>

						<!--  -->
						@if('stories')
							@foreach($stories as $story)
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
								      <h1>{{ $story->story }}</h1>
								      <h2>Opening a door to the future</h2>
								      <p class="trim-text"> {{ $story->content }}</p>
								      <p class="read-more">
								        <a href="#">Read More</a>
								      </p>
								    </div>
								</div>
							@endforeach
						@endif

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