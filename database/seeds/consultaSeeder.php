<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class consultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   DB::table('consulta')->insert([
	'paciente_id'			=> 	'1',
	'preconsulta_id'		=>		null,
	'diagnostico_med_id'	=>		null,
	'estado'			=> 	'finalizada',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::yesterday() 
	]);
	 
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'3',
	'preconsulta_id'		=>		null,
	'diagnostico_med_id'	=>		null,
	'estado'			=> 	'finalizada',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::yesterday()
	]);
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'1',
	'preconsulta_id'		=>		null,
	'diagnostico_med_id'	=>		null,
	'estado'			=> 	'proceso',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::now()
	]);
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'2',
	'preconsulta_id'		=>		null,
	'diagnostico_med_id'	=>		null,
	'estado'			=> 	'proceso',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::now() 
	]);
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'3',
	'preconsulta_id'		=>		null,
	'diagnostico_med_id'	=>		null,
	'estado'			=> 	'proceso',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::now() 
	]);
	
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'1',
	'preconsulta_id'		=>		null,
	'diagnostico_med_id'	=>		null,
	'estado'			=> 	'proceso',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::now() 
	]);
	factory(hospital\Consulta::class,30)->create();
    }
}
