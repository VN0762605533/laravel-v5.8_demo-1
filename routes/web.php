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

Route::get('/', function () {
    return view('home');
});
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
/*end-profile*/
/*--------------------stores------------------------*/
ROUTE::get('/stores', 'storeController@index');
