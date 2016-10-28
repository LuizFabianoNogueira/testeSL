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

#Rota da rais do sistema
Route::get('/', function () { return view('welcome');});

#Rota simples para home page
Route::get('/home', 'HomeController@index');

#Rotas de autenticação e outros da classe Auth
Auth::routes();

#rota para view de controle de passaport
Route::get('/passport/', function(){ return view('passport.home'); });

#Grupo Admin
Route::group(['prefix' => 'admin'], function () {
	#raiz admin
    Route::get('/', function () { return view('admin.home'); });
    #lista de paises
    Route::get('/country/{id?}', 'CountryController@list');
    Route::get('/countries', 'CountryController@list');
    #lista de estados
    Route::get('/state/{id}', 'StateController@get');
    Route::get('/states/{id?}', 'StateController@list');
});

//Route::get('/register', function(){ return view('register.new'); });
Route::get('/novo', function(){ return view('register.new'); })->name('cadastro.novo');
Route::post('/novo/save', 'PersonController@salvar')->name('cadastro.save');

Route::get('/teste', function () { 
	
	$Obj = \App\Models\State::find(10);
	dd($Obj);

});