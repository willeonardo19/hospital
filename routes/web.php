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
/////////////////////////////////////////////////
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

	Route::resource('personal','PersonalController');
	Route::get('personal/{id}/destroy',[
			'uses'		=>	'PersonalController@destroy',
			'as'		=>	'personal.destroy'
		]);
	Route::resource('usuarios','UsuariosController');
	Route::get('usuarios/{id}/destroy',[
			'uses'		=>	'UsuariosController@destroy',
			'as'		=>	'usuarios.destroy'
		]);
	Route::resource('pacientes','PacientesController');
	Route::get('pacientes/{id}/destroy',[
			'uses'		=>	'PacientesController@destroy',
			'as'		=>	'pacientes.destroy'
		]);



});

//////////////////////////////////////////////////
Route::get('logout','Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

