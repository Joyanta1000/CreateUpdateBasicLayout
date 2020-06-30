<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
	return view('home');
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/service', function(){
	return view('service');
});

Route::get('/add', 'OurController@add');

Route::post('store','OurController@store');

Route::get('/Mylist','OurController@Mylist');

Route::get('/edit/{id}','OurController@edit');

Route::post('/update/{id}','OurController@update');