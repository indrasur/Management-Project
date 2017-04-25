<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');


    
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('blog','BlogController');
  // more route will passed here
  Route::post ('/editItem', 'BlogController@editItem');
  // add item routes
  Route::post ( '/addItem', 'BlogController@addItem' );
  // delete item routes
  Route::post ( '/deleteItem', 'BlogController@deleteItem' );
});


Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('show','HomeController@show');
	
Route::get('post','BlogController@index');

Route::get('add','HomeController@add');

Route::get('index1','HomeController@index1');

Route::get('index2','HomeController@index2');

Route::get('index3','HomeController@index3');

Route::get('edit','HomeController@edit');

 Route::post ('addItem','HomeController@addItem');

Route::get('create','HomeController@index');
Route::post('store','HomeController@store');

Route::post('/loginRole',[
		'uses' => 'LoginController@login',
		'as' => 'loginRole'
	]);



Route::group(['middleware' => 'auth'],function(){
    Route::get('/home',function(){
        return view('home');
    })->name('home');
     Route::get('/homeEmp',function(){
        return view('homeEmp');
    })->name('homeEmp');
});