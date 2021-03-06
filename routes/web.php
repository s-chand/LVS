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

Route::get('/', function (){
    return view('index');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home/dashboard', 'HomeController@index'); //Dashboard Controller
    Route::get('/home/search/land', 'HomeController@search'); //SearchP page controls
    Route::get('/land/search/{parcel_number}', 'ParcelController@show'); //Backend that responds to jQuery requests
});
//Handle payment redirects for paystack
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');