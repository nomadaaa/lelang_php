<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::get('/{any}', 'FrontController@index')->where('any', '.*')->name('productvue.index');

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/productvue', function(){
	return view('welcome');
});


Route::group(['middleware' => 'auth'], function(){

});

Route::get('/user', function(){
	return view('layouts.user');
});

Route::resource('/product', 'ProductController');
Route::resource('/category', 'CategoryController');
