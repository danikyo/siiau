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

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/creacion', function () {
    return view('auth/register');
});

//Route::get('/googleDrive', function () {
  //  return view('googleDrive');
//});



Route::get('creartabla',function(){
Schema :: create('products',function($tabla)
{
  $tabla->increments('id');
  $tabla->string('nombre');
});
return "yeaah";
});
//googleDrive

Route::get('prueba','GoogleController@creationURL');

Route::post('token','GoogleController@accessTokenCreation');
Route::get('refresh','GoogleController@refreshToken');
Route::get('folder','GoogleController@createFolders');
Route::get('file','GoogleController@uploadFile');
Route::get('fifito','GoogleController@save');

Route::post('metodopost','GoogleController@postMetod');
Route::post('tokenCreation','GoogleController@accessTokenCreation');
Route::get('metodopost','GoogleController@postMetod');
Route::get('pruebaPdf','PdfController@generatingPdf');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/googledrive', 'GoogleController@creationURL')->name('googledrive');
