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
        	'dpi'				=>	'2137696831503',
        	'created_at' 		=> date("Y-m-d H:i:s") 
        	]);
    }
}
