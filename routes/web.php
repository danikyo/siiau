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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'namespace' => 'Academica'], function () {

	Route::get('/horario', 'HorarioController@index');
	Route::get('/boleta', 'BoletaController@index');
	Route::get('/kardex', 'KardexController@index');
	Route::get('/constancia', 'ConstanciaController@index');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Registro'], function () {
	Route::get('/oferta_academica', 'OfertaAcademicaController@index');
	Route::get('/pre_registro', 'PreRegsitroController@index');
	Route::get('/registrar_materias', 'RegistrarMateriasController@index');
	Route::get('/registro_movilidad', 'RegistroMovilidadController@index');
	Route::get('/servicio_social', 'RegistroMovilidadController@index');
});