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

Route::get('blade', function () {
    return view('child',['nombre'=>'Juan Carlos',
				'apellido'=>'Rocafuerte',
				'ciudades'=>array('Guayaquil'=>'Guayas','Quito'=>'Pichincha','Cuenca'=>'Azuay')]);
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/hello', 'HelloWorld@hello');
Route::get('/page1', 'Septiembre@page_one');
Route::get('/page2', 'Septiembre@page_two');
Route::get('/first','Lunes@principal');
Route::get('/cards','CardsController@index');
Route::get('/cards/{card}','CardsController@show');