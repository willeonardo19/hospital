<?php

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
        	'user'				=> 	'leonardosoftadmin',
        	'email'				=>	'willeonardo19@gmail.com',
        	'password'			=>	bcrypt('tahuico.'),
        	'type'				=>	'admin',
        	'personal_id'		=>	'1',
        	'created_at' 		=> 	date("Y-m-d H:i:s") 
        	]);
         DB::table('users')->insert([
            'user'              =>  'secretaria',
            'email'             =>  'milsycord@gmail.com',
            'password'          =>  bcrypt('secretaria.'),
            'type'              =>  'secretaria',
            'personal_id'       =>  '2',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
         DB::table('users')->insert([
            'user'              =>  'administracion',
            'email'             =>  'administracion@gmail.com',
            'password'          =>  bcrypt('administracion.'),
            'type'              =>  'administracion',
            'personal_id'       =>  '4',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
         DB::table('users')->insert([
            'user'              =>  'laboratorio',
            'email'             =>  'laboratorio@gmail.com',
            'password'          =>  bcrypt('laboratorio.'),
            'type'              =>  'laboratorio',
            'personal_id'       =>  '5',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
         DB::table('users')->insert([
            'user'              =>  'doctor',
            'email'             =>  'doctor@gmail.com',
            'password'          =>  bcrypt('doctor.'),
            'type'              =>  'doctor',
            'personal_id'       =>  '3',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
         DB::table('users')->insert([
            'user'              =>  'enfermera',
            'email'             =>  'enfermera@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '6',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
         DB::table('users')->insert([
            'user'              =>  'Wilsssaas',
            'email'             =>  'admin@gmail.com',
            'password'          =>  bcrypt('admin.'),
            'type'              =>  'admin',
            'personal_id'       =>  '1',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
         DB::table('users')->insert([
            'user'              =>  'paraeliminar',
            'email'             =>  'paraeliminar@gmail.com',
            'password'          =>  bcrypt('eliminar.'),
            'type'              =>  'member',
            'personal_id'       =>  '8',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
    }
}
