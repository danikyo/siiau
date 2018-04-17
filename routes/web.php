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

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/help', 'HelpController@index');
});



Route::group(['middleware' => 'auth', 'namespace' => 'Academica'], function () {

	Route::get('/horario', 'HorarioController@index');
	Route::get('/materias', 'MateriasController@index');
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

Route::group(['middleware' => 'auth', 'namespace' => 'Servicios'], function () {
	Route::get('/servicios/google', 'GoogleController@index');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Configuracion'], function () {
	Route::get('/configuracion/nip', 'NipController@index');
	Route::get('/configuracion/pagos', 'PagosController@index');
});