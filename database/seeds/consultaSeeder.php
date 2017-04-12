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
	'usuario_id'			=> 	'5',
	'estado'			=> 	'finalizada',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::yesterday() 
	]);
	 DB::table('consulta')->insert([
	'paciente_id'			=> 	'2',
	'usuario_id'			=> 	'5',
	'estado'			=> 	'finalizada',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::yesterday() 
	]);
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'3',
	'usuario_id'			=> 	'5',
	'estado'			=> 	'finalizada',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::yesterday()
	]);
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'1',
	'usuario_id'			=> 	'5',
	'estado'			=> 	'proceso',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::now()
	]);
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'2',
	'usuario_id'			=> 	'5',
	'estado'			=> 	'solicitada',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::now() 
	]);
	DB::table('consulta')->insert([
	'paciente_id'			=> 	'3',
	'usuario_id'			=> 	'5',
	'estado'			=> 	'solicitada',
	//'antecedentes'		=>	'Ninguno',
	'created_at' 		=> Carbon::now() 
	]);
    }
}
