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

Route::get('/', 'ContratoController@index')->name('contrato');
/*
Route::get('/index2', 'ContratoController@index2');

Route::get('/prueba', function(){
        
$registro=\App\Models\Persona::find("1663351");
dd($registro->primer_nom);
});
*/