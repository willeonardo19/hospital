<?php

use Illuminate\Database\Seeder;

class pacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paciente')->insert([
        	'cod_pac'			=> 	'1908',
        	'dpi'				=> 	'2197696381503',
        	'nombre'			=> 	'Wilson',
        	'apellido'			=>	'Leonardo',
        	'telefono'			=>	'41154436',
        	'fech_na'           =>  '1992-08-19',
        	'sexo'            	=>  'masculino',
        	'est_civ'           =>  'soltero',
            'religion'          =>  'catolica',
            'ocupacion'       	=>  'Estudiante',
        	'direccion'			=>	'Salamá, Baja Verapaz',
            'contacemer'       =>  'Cundo Leonardo',
            'contacttel'        =>  '41062089',
        	//'antecedentes'		=>	'Ninguno',
        	'created_at' 		=> date("Y-m-d H:i:s") 
        	]);
        /*
        DB::table('paciente')->insert([
            'cod_pac'           =>  '1907',
            'dpi'               =>  '2197696381501',
            'nombre'            =>  'Alvaro',
            'apellido'          =>  'Tahuico',
            'telefono'          =>  '41154437',
            'fech_na'           =>  '1992-08-19',
            'sexo'              =>  'masculino',
            'est_civ'           =>  'soltero',
            'ocupacion'         =>  'Estudiante',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'contacemer'       =>  'Cundo Leonardo',
            'contacttel'        =>  '41062089',
            //'antecedentes'        =>  'Ninguno',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
        DB::table('paciente')->insert([
            'cod_pac'           =>  '1968',
            'dpi'               =>  '2197696381508',
            'nombre'            =>  'Melissa',
            'apellido'          =>  'Mazariegos',
            'telefono'          =>  '87896545',
            'fech_na'           =>  '1992-08-19',
            'sexo'              =>  'femenino',
            'est_civ'           =>  'soltero',
            'ocupacion'         =>  'Estudiante',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'contacemer'       =>  'Cundo Leonardo',
            'contacttel'        =>  '41062089',
            //'antecedentes'        =>  'Ninguno',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
    */
         factory(hospital\Paciente::class,9)->create();
    }
}
