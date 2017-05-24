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
        	'nombre'			=> 	'Wilson A.',
        	'apellido'			=>	'Leonardo Tahuico',
        	'telefono'			=>	'41154436',
        	'direccion'			=>	'Salamá, Baja Verapaz',
            'fechna'            =>  '1992-08-19',
            'sexo'              =>  'masculino',
        	'dpi'				=>	'2137696831503',
            'contacemer'       =>  'Cundo Leonardo',
            'contacttel'        =>  '41062089',
        	'created_at' 		=> date("Y-m-d H:i:s") 
        	]);
        /* DB::table('personal')->insert([
            'nombre'            =>  'Milsy',
            'apellido'          =>  'Cordova',
            'telefono'          =>  '42415635',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'fechna'            =>  '1990-10-29',
            'sexo'              =>  'femenino',
            'dpi'               =>  '2137696831503',
            'contacemer'       =>  'Wil Leonardo',
            'contacttel'        =>  '41154436',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
         DB::table('personal')->insert([
            'nombre'            =>  'Heber',
            'apellido'          =>  'Ramos',
            'telefono'          =>  '52364145',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'fechna'            =>  '1990-10-29',
            'sexo'              =>  'masculino',
            'dpi'               =>  '2137696831503',
            'contacemer'       =>  'Ramos Ramos',
            'contacttel'        =>  '41154436',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
         DB::table('personal')->insert([
            'nombre'            =>  'Rafael',
            'apellido'          =>  'Lima',
            'telefono'          =>  '42415635',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'fechna'            =>  '1990-10-29',
            'sexo'              =>  'masculino',
            'dpi'               =>  '2137696831503',
            'contacemer'       =>  'Wil Leonardo',
            'contacttel'        =>  '41154436',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
         DB::table('personal')->insert([
            'nombre'            =>  'Hugo',
            'apellido'          =>  'Arevalo',
            'telefono'          =>  '42415635',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'fechna'            =>  '1990-10-29',
            'sexo'              =>  'masculino',
            'dpi'               =>  '2137696831503',
            'contacemer'       =>  'Wil Leonardo',
            'contacttel'        =>  '41154436',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
         DB::table('personal')->insert([
            'nombre'            =>  'Alv',
            'apellido'          =>  'Tahuico',
            'telefono'          =>  '42415635',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'fechna'            =>  '1990-10-29',
            'sexo'              =>  'masculino',
            'dpi'               =>  '2137696831503',
            'contacemer'       =>  'Wil Leonardo',
            'contacttel'        =>  '41154436',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
         DB::table('personal')->insert([
            'nombre'            =>  'Editar Ed',
            'apellido'          =>  'Editar Ed',
            'telefono'          =>  '42415635',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'fechna'            =>  '1990-10-29',
            'sexo'              =>  'femenino',
            'dpi'               =>  '2137696831503',
            'contacemer'       =>  'Wil Leonardo',
            'contacttel'        =>  '41154436',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);
         DB::table('personal')->insert([
            'nombre'            =>  'Eliminar Elimi',
            'apellido'          =>  'Eliminar Elim',
            'telefono'          =>  '42415635',
            'direccion'         =>  'Salamá, Baja Verapaz',
            'fechna'            =>  '1990-10-29',
            'sexo'              =>  'masculino',
            'dpi'               =>  '2137696831503',
            'contacemer'       =>  'Wil Leonardo',
            'contacttel'        =>  '41154436',
            'created_at'        => date("Y-m-d H:i:s") 
            ]);*/

            factory(hospital\Personal::class,19)->create();
    }
}
