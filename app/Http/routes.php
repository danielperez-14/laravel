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

Route::get('Tarea/taller', 'TareaController@trabajo');
Route::get('Tarea/taller', 'TareaController@gettrabajo');
//////Transporte
Route::get('transporte', 'TransportController@index');
Route::get('transporte/crear', 'TransportController@crear');
Route::get('transporte/tipo{tipo}/crear', 'TransportController@creartipo');
///Transporte marca
Route::get('transporte/marca', 'BrandController@index');
Route::get('transporte/marca/crear', 'BrandController@crear');
///Transporte model
Route::get('transporte/modelo', 'ModelController@index');
Route::get('transporte/modelo/crear', 'ModelController@crear');


