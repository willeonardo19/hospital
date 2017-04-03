<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
class personalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('personal')->insert([
        	'nombre'			=> 	'Wilson',
        	'apellido'			=>	'Leonardo',
        	'telefono'			=>	'41154436',
        	'direccion'			=>	'Salamá, Baja Verapaz',
            'fechna'            =>  '1992-08-19',
        	'dpi'				=>	'2137696831503',
            'contacemer'       =>  'Cundo Leonardo',
            'contacttel'        =>  '41062089',
        	'created_at' 		=> date("Y-m-d H:i:s") 
        	]);
         DB::table('personal')->insert([
            'nombre'            =>  'Milsy',
            'apellido'          =>  'Cordova',
            'telefono'          =>  '42415635',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'fechna'            =>  '1990-10-29',
            'dpi'               =>  '2137696831503',
            'contacemer'       =>  'Wil Leonardo',
            'contacttel'        =>  '41154436',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
    }
}
