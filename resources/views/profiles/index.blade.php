@extends('layouts.app')

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
	<meta name="_token" content="{{csrf_token()}}" />
@endpush

@section('content')
	<div id="profile-background" class="">
		<div class="">
		    <div class="card blur border-5 pt-2 active pb-0 px-3">
		         <div class="card-body ">
		             <div class="row">
		                 <div class="col-12 ">
		                     <h4 class="card-title "><b>HELLO <span class="font-weight-bold"> BBBootstrap Team</span></b></h4>
		                 </div>
		                 <div class="col">
		                     <h6 class="card-subtitle mb-2 text-muted">
		                         <p class="card-text text-muted small "> <img src="https://img.icons8.com/metro/26/000000/star.png" class="mr-1 " width="19" height="19" id="star"> <span class="vl mr-2 ml-0"></span>  on 1 Nov , 2018</p>
		                     </h6>
		                 </div>
		             </div>
		         </div>
		         <div class="card-footer px-0 ">
		             <div class="row  d-flex flex-row-reverse">
		                 <div class=" col-md-auto">
		                 	<span class="vl ml-3"></span>
		                 	<a href="#" class="btn btn-outlined btn-black text-muted bg-transparent" data-wow-delay="0.7s">
		                 		<img src="https://img.icons8.com/ios/50/000000/settings.png" width="19" height="19">
		                 		<small>SETTINGS</small>
		                 	</a>
		                 	<!-- <i class="mdi mdi-settings-outline"></i> -->
		                 	<a href="#" class=" btn-outlined btn-black text-muted"><img src="https://img.icons8.com/metro/26/000000/link.png" width="17" height="17" id="plus"> <small>PROGRAM LINK</small> </a> 
		                 	<a href="#" class="btn btn-outlined btn-black text-muted "><img src="https://img.icons8.com/metro/26/000000/more.png" width="20" height="20" class="mr-2 more"><small>MORE</small></a>
		                 </div>
		                 <div class="col-md-auto ">
		                     <ul class="list-inline">
		                         <li class="list-inline-item"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1573035860/Pra/Hadie-profile-pic-circle-1.png" alt="DP" class=" rounded-circle img-fluid " width="35" height="35"> </li>
		                         <li class="list-inline-item"> <img src="https://img.icons8.com/ios/50/000000/plus.png" width="30" height="30 " class="more"> </li>
		                     </ul>
		                 </div>
		             </div>
		         </div>
		     </div>
		 </div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div id="profile-card">
					<div class="container mt-5 d-flex justify-content-center">
					    <div class="card p-3">
					        <div class="d-flex align-items-center">
					            <div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155"> </div>
					            <div class="ml-3 w-100">
					                <h4 class="mb-0 mt-0">{{ $dataInfo[0]->name }}</h4> <span>Senior Journalist</span>
					                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
					                    <div class="d-flex flex-column"> <span class="articles">Articles</span> <span class="number1">38</span> </div>
					                    <div class="d-flex flex-column"> <span class="followers">Followers</span> <span class="number2">980</span> </div>
					                    <div class="d-flex flex-column"> <span class="rating">Rating</span> <span class="number3">8.9</span> </div>
					                </div>
					                <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btn btn-sm btn-outline-primary w-100">Chat</button> <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button> </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
				<!-- button create diary -->
				<div id="create-diary" class="container mt-5 d-flex justify-content-center">
					<!-- <c class="btn btn-sm btn-outline-primary" style="width: 400px">Create diary</button>  -->
					<button type="button" class="custom-btn btn-2" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> &nbsp; Create diary</button>
				</div>

			</div>
			
			<div class="col-md-7">
				<div class="posts-container mt-5">
					<div class="row image-container d-flex">
						@if($checkImages)
							@foreach($dataImages as $dataImage)
								@if (file_exists( 'storage/images/' . $dataImage->name))
								<div class="col-md-4 d-pr-pl">
									<a href="javascript:void()" data-toggle="modal" data-target="#modalStory" >
										<img class="image-story openStory" data-idstory="{{ $dataImage->id }}" src="storage/images/{{ $dataImage->name }}" alt="">
									</a>
								</div>
								@endif
							@endforeach
						@else
							<p class="text-center w-100">There is no story here</p>
						@endif
						<!-- <div class="col-md-4 d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/604/200/200.jpg?hmac=qgFjxODI1hMBMfHo68VvLeji-zvG9y-iPYhyW0EkvOs" alt="">
						</div>
						<div class="col-md-4  d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/253/200/200.jpg?hmac=_dceojr9yz5ZIKoye8I9HOqPCBHfn-jT9aRYdoLx1kQ" alt="">
						</div>
						<div class="col-md-4  d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/119/200/200.jpg?hmac=JGrHG7yCKfebsm5jJSWw7F7x2oxeYnm5YE_74PhnRME" alt="">
						</div>
						<div class="col-md-4  d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/520/200/200.jpg?hmac=gq6GVKg64GMqsvk_d6gzXZ7L1htska1jEdgBnAwm4xU" alt="">
						</div>
						<div class="col-md-4  d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/553/200/200.jpg?hmac=HSLKzqqoxnajv4KjLxYSjZokWcuCCiZLGdRPUoryhXk" alt="">
						</div>
						<div class="col-md-4  d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/988/200/200.jpg?hmac=-lwK-i6PssD9WlUeVPDIhOxDVxlzJKeM4MgEx_fIqJg" alt="">
						</div>
						<div class="col-md-4  d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/604/200/200.jpg?hmac=qgFjxODI1hMBMfHo68VvLeji-zvG9y-iPYhyW0EkvOs" alt="">
						</div>
						<div class="col-md-4  d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/253/200/200.jpg?hmac=_dceojr9yz5ZIKoye8I9HOqPCBHfn-jT9aRYdoLx1kQ" alt="">
						</div>
						<div class="col-md-4  d-pr-pl">
							<img class="image-story" src="https://i.picsum.photos/id/553/200/200.jpg?hmac=HSLKzqqoxnajv4KjLxYSjZokWcuCCiZLGdRPUoryhXk" alt="">
						</div> -->
					</div>
				</div>
			</div>

			<div class="col-md-1">
				<div class="option-gallery">
					<div class="option-item active"><i class="fas fa-th"></i></div>
					<div class="option-item"><i class="fas fa-th-large"></i></div>
					<div class="option-item"><i class="fas fa-square"></i></div>
					<div class="option-item"><i class="fas fa-portrait"></i></div>
				</div>
			</div>

			<!-- The Modal -->
			  <div class="modal fade" id="myModal">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="modal-header">
			          <h4 class="modal-title">Create diary</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->

		        	<!-- code form here -->
		        	<form action="{{ url('/stories/stored') }}" method="post" enctype="multipart/form-data" id="laravel-ajax-file-upload">
		        		@csrf
			        <div class="modal-body">
						<div>
							<div>
								<span id="image-input-error" class="text-danger"></span>
							</div>
							<div class="tab-content" id="pills-tabContent">
							  <div class="tab-pane fade show active" id="pills-your-story" role="tabpanel" aria-labelledby="pills-story-tab">
							  	<div class="form-group">
								    <label for="story">Title story:</label>
								    <input type="text" class="form-control" name="story" id="story" placeholder="title ....">
								    <span class="text-danger d-none" id="error-story"></span>
								</div>
							  	<div class="form-group">
							  		<label for="task-content-story">content story:</label>
									<textarea name="content" cols="40" rows="5" class="form-control" id="task-content-story" placeholder="content ....">{!! old('content', 'test editor content') !!}</textarea>
									<span class="text-danger d-none" id="error-story"></span>
								</div>
							  </div>
							  <div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
								  <input type="file" name="storyFile" class="form-control" id="storyFile">
								  <span class="text-danger d-none" id="error-storyFile"></span>
							  </div>
							</div>
						</div>
			        </div>
			        	
			        <!-- Modal footer -->
			        <div class="modal-footer d-flex justify-content-between align-items-center">
			        	<ul class="nav nav-pills" id="pills-tab" role="tablist">
							  <li class="nav-item" role="presentation">
							    <a class="nav-link active" id="pills-story-tab" data-toggle="pill" href="#pills-your-story" role="tab" aria-controls="pills-home" aria-selected="true"><i class="far fa-newspaper"></i> &nbsp; your story</a></a>
							  </li>
							  <li class="nav-item" role="presentation">
							    <a class="nav-link" id="pills-images-tab" data-toggle="pill" href="#pills-images" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="far fa-images"></i> &nbsp; image</a>
							  </li>
						</ul>
						<ul class="nav">
							<li class="nav-item">
								<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
							</li>
							<li class="nav-item">
								<button class="btn btn-danger" type="submit" id="ajaxSubmit"><i class="fas fa-file-import"></i> &nbsp; post</button>
							</li>
						</ul>
			        </div>
		          	</form>

			      </div>
			    </div>
			  </div>

			<!-- Modal display story -->
			<div class="modal fade" id="modalStory">
				<div class="modal-dialog modal-lg">
			      <div class="modal-content">
			      
			        <!-- Modal body -->
			        <div class="modal-body">
						<div>
							<div>
								<span id="image-input-error" class="text-danger"></span>
							</div>
							<div class="tab-content" id="pills-tabContent">
							  <div class="tab-pane fade show active d-flex" id="pills-your-story" role="tabpanel" aria-labelledby="pills-story-tab">
							  	<div class="imageStory">
							  		<img src="" alt="" class="imageStory">
							  	</div>
							  	<div class="detailContent  ml-2">
							  		<h4 class="story-title"></h4>
							  		<div class='story-content'>
							  			
							  		</div>
							  	</div>
							  </div>
							  <div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
								  ...
							  </div>
							</div>
						</div>
			        </div>
			        	
			      </div>
			    </div>
			</div>

		</div>
	</div>

	
@endsection

@push('scripts')
	<script>
		CKEDITOR.replace('task-content-story', options);
  	</script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script>
  		$( document ).ready(function() {

			$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		        }
		    });

		    $('#laravel-ajax-file-upload').submit(function(e) {
		       	e.preventDefault();
		       	let formData = new FormData(this);
		       	$('#image-input-error').text('');

		       	$.ajax({
		          	type:'POST',
		          	url: `{{url('/stories/stored')}}`,
		           	data: formData,
		           	contentType: false,
		           	processData: false,
		           	success: (response) => {
		             	if (response) {
		             		console.log(response);
		             		if (response.errors) {
		                  		$('#story').addClass('error');

		                  		for (var key in response.errors) {
								    // skip loop if the property is from prototype
								    if (!response.errors.hasOwnProperty(key)) continue;

								    var obj =  response.errors[key];
								    for (var prop in obj) {
								        // skip loop if the property is from prototype
								        if (!obj.hasOwnProperty(prop)) continue;

								        // your code
								        if (key == 'story')
								        {
								        	$('#error-story').append('<li>'+ obj[prop] +'</li>')
								        }
								        else if(key == 'storyFile')
								        {
								        	$('#error-storyFile').append('<li>'+ obj[prop] +'</li>');
								        	$('#pills-story-tab').removeClass('active');
								        	$('#pills-images-tab').addClass('active');
								        	$('#pills-your-story').removeClass('active show');
								        	$('#pills-images').addClass('active show');
								        }
								    }
								}
		                  		$('#error-story').removeClass('d-none');
		                  		$('#error-storyFile').removeClass('d-none');
		             		}
		             		else
		             		{
		             			this.reset();
		                  		$('#story').removeClass('error');
		                  		$('#error-story').removeClass('error');
		                  		$('#story').addClass('d-none');
		                  		$('#error-story').addClass('d-none');
		               			alert('Image has been uploaded successfully');
		                  		$('.close').click();
		             		}
		               		
		             	}
		           	},
		           	error: function(response){
		              	console.log(response);
		                	$('#image-input-error').text(response.responseJSON.errors.file);
		           	}
		       	});
		  	});

		  	//
		  	$('.openStory').on('click', function()
		  	{
		  		console.log($(this).data('idstory'));
		  		var idstory = $(this).data('idstory');
		  		$.ajax({
		  			type:'GET',
		          	url: "/stories/show/"+idstory,
		           	contentType: false,
		           	processData: false,
		           	success: (response) => {
		           		if(response.errors)
		           		{
		           			console.log(response.errors);
		           		}
		           		else
		           		{
		           			console.log(response.success[0].name);
		           			$('.imageStory').attr('src', '/storage/images/'+response.success[0].name);
		           			$('.story-title').text(response.success[0].story);
		           			$('.story-content').html(response.success[0].content);
		           		}
		           	},
		           	error: function(response){
		              	console.log(response);
		                	// $('#image-input-error').text(response.responseJSON.errors.file);
		           	}
		  		})
		  	})
        });
      </script>
@endpush