@extends('layouts.app')

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
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
					                <h4 class="mb-0 mt-0">Alex Morrision</h4> <span>Senior Journalist</span>
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
			</div>
			<!--  -->
			<!-- <div class="col-md-8">
				<div id="profile-content">
					<div class="container mt-5 d-flex justify-content-center">
					    <div class="card p-3">
					        <div class="panel">
							  	<div class="panel-body bio-graph-info">
							     	<h3></h3>
							      	<div class="row">
							          	<table class="table table-bordered">
										  <thead class="table-light">
										    <tr>
										    	<th class="stats">Title</th>
										    	<th class="text-right"></th>
										    </tr>
										  </thead>
										  <tbody>
										  	@foreach($dataInfo as $data)
										    <tr>
												<td class="stats">Fullname:</td>
												<td class="text-right"><input type="text" class="text-right border-0" value="{{ $data->name }}"></td>
										    </tr>
										    <tr>
												<td class="stats">Email</td>
												<td class="text-right"><input type="text" class="text-right border-0" value="{{ $data->email }}"></td>
										    </tr>
											@endforeach 
										  </tbody>
										</table>
							      	</div>
							  	</div>
							</div>
					    </div>
					</div>
				</div>
			</div> -->
			<div class="col-md-7">
				<div class="posts-container mt-5">
					<div class="row image-container d-flex">
						<div class="col-md-4 d-pr-pl">
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
						</div>
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
		</div>
	</div>

	
@endsection

@push('scripts')
@endpush