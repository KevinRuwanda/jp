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

// Route::group(['middleware' => 'auth'], function(){
// 	Route::resource('Product', 'ProductController', ['except' => ['index','show']]);
// 	Route::resource('Setting', 'SettingController', ['except' => ['index','show']]);
// 	Route::resource('Transaction', 'TransactionController', ['except' => ['index','show']]);
// 	Route::resource('Order', 'OrderController', ['except' => ['index','show']]);
// 	Route::resource('Profile', 'ProfileController', ['except' => ['index','show']]);
// });

Route::get('/home', function () {
	return view('welcome2');
});
Route::get('/', function () {
	return view('welcome2');
});

// hapus nantik
Route::get('/tabahproduk', function () {
	return view('ikan.create');
});

// Auth::routes();

// Route::group(['middleware' => 'mimin'], function(){
// 	Route::get('/mimin', 'MiminController@dasboard');
// });


// Route::get('/notifications/{id}', 'HomeController@notifications');

// Route::resource('/Product', 'ProductController', ['only' => ['index','show']]);
// Route::resource('/Setting', 'SettingController', ['only' => ['index','show']]);
// Route::resource('/Transaction', 'TransactionController', ['only' => ['index','show']]);
// Route::resource('/Order', 'OrderController', ['only' => ['index','show']]);
// Route::resource('/Profile', 'ProfileController', ['only' => ['index','show']]);


