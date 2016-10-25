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

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/passport/', function(){
	return view('passport.home');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () { return view('admin.home'); });
    Route::get('/country/list', 'CountryController@list');
});


#JSON LIST
Route::get('/country/list', function () { return json_encode( \App\Models\Country::get()); });
Route::get('/country/list/{id}', function ($id) { return json_encode( \App\Models\Country::find($id)->get()); });