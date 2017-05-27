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
	//Importar Excel
	Route::post('ImportarPersonal','ExcelController@ImportarPersonal');
	Route::post('ImportarUsuarios','ExcelController@ImportarUsuarios');
	Route::post('ImportarPacientes','ExcelController@ImportarPacientes');

	//Exportar Excel
	Route::get('ExportarPersonal','ExcelController@ExportarPersonal');
	Route::get('ExportarUsuarios','ExcelController@ExportarUsuarios');
	Route::get('ExportarPacientes','ExcelController@ExportarPacientes');

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
	Route::resource('consultas','ConsultasController');
	Route::any('showhistorial','ConsultasController@showhistorial');

	Route::any('historial','ConsultasController@historial_consultas');
	Route::any('preconsulta','ConsultasController@pre_consulta');//muestra el listado de consultas para la enfermera
	Route::get('consultas/{id}/registropreconsulta',[
			'uses'		=>	'ConsultasController@registro_preconsulta',
			'as'		=>	'consultas.registropreconsulta'
		]);

	Route::any('registropreconsulta','ConsultasController@registro_preconsulta');//devuelve la vista para registrar la preconsulta
	Route::any('consulta','ConsultasController@consulta_medica');//muestra el listado de consultas paa el doctor
	Route::get('consultas/{id}/destroy',[
			'uses'		=>	'ConsultasController@destroy',
			'as'		=>	'consultas.destroy'
		]);
	Route::resource('preconsultas','PreconsultasController');
	Route::resource('diagnostico','DiagnosticosController');
	Route::resource('laboratorio','LaboratoriosController');
	Route::get('laboratorio/{id}/destroy',[
			'uses'		=>	'LaboratoriosController@destroy',
			'as'		=>	'laboratorio.destroy'
		]);
	Route::resource('examen','ExamenesController');
	Route::get('examen/{id}/destroy',[
			'uses'		=>	'ExamenesController@destroy',
			'as'		=>	'examen.destroy'
		]);
	Route::resource('reportes','ReportesController');
	Route::any('constancia_med','PacientesController@constancia_med');

});




//////////////////////////////////////////////////
Route::get('logout','Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

