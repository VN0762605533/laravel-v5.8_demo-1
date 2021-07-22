<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'checkLogin'], function () {
    Route::get('/laravel-show', function(){
      return View('filemanager');
    });
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
     
    // list all lfm routes here...
  });

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'DiaryController@index');
/*------------------------auth------------------------*/
ROUTE::get('/login', 'user\loginController@index');
ROUTE::post('/login/store', 'user\loginController@store');

ROUTE::get('/logout', 'user\loginController@logout');

ROUTE::get('/register', 'user\registerController@create');
ROUTE::post('/register/store', 'user\registerController@store');

ROUTE::get('/forgot', function() {
	return view('auths.forgot');
});
ROUTE::get('/reset', function() {
	return view('auths.reset');
});
/*---------------------end-auth---------------------*/
/*profile*/
ROUTE::get('/profile', 'user\profileController@index')->middleware('checkLogin');
ROUTE::post('/stories/stored', 'diaryController@stored');
ROUTE::get('/stories/show/{id}', 'diaryController@show');

/*end-profile*/
/*--------------------stores------------------------*/
ROUTE::get('/stores', 'storeController@index');
