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
    return view('pages.home');
});

Route::get('/shop', function() {
    return view('pages.shop');
});

Route::get('check-connect',function(){
    if(DB::connection()->getDatabaseName())
    {
    return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }else{
    return 'Connection False !!';
    }
    
   });

Route::resource('product', 'ProductController');    

Route::get('getProducts', 'ProductsController@getProduct');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/res', function(){
    return view('pages.register');
});