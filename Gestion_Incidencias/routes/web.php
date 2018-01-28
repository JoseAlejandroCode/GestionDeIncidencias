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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/reportar', 'HomeController@getReport')->name('reportar');
Route::post('/reportar', 'HomeController@postReport')->name('reportar');

Route::middleware(['admin'])->group(function () {
	Route::namespace('Admin')->group(function () {
	    Route::get('/usuarios','UserController@index')->name('usuarios');
		Route::post('/usuarios','UserController@store');
		
		Route::get('/usuarios/{id}','UserController@edit');
		Route::post('/usuarios/{id}','UserController@update');

		Route::get('/usuarios/{id}/eliminar','UserController@delete');

		Route::get('/proyectos','ProjectController@index')->name('proyectos');
		Route::get('/config','ConfigController@index')->name('config');;
	});
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
