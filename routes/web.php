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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function() {
    return view('index');
});
Route::get('/parcels', 'LandRecordsController@getLandInfo');
Route::get('/api/land/show/{id}','LandVerificationController@show');
Route::group(array('prefix'=>'api'),function(){
  Route::resource('land','LandVerificationController',['parameters'=>['show'=>'id']]);//,array('only'=>array('index','show')));
});
Route::get('{any}', function ($any) {
      return view('index');
    })->where('any', '.*');
