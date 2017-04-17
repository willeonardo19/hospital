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
        //Mi usuario
         DB::table('users')->insert([
        	'user'				=> 	'leonardosoftadmin',
        	'email'				=>	'willeonardo19@gmail.com',
        	'password'			=>	bcrypt('tahuico.'),
        	'type'				=>	'admin',
        	'personal_id'		=>	'1',
        	'created_at' 		=> 	date("Y-m-d H:i:s") 
        	]);
         //usuario Administrador de Clinica
         /*DB::table('users')->insert([
            'user'              =>  'administracion',
            'email'             =>  'administracion@gmail.com',
            'password'          =>  bcrypt('administracion.'),
            'type'              =>  'administracion',
            'personal_id'       =>  '2',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
         //Doctores
         DB::table('users')->insert([
            'user'              =>  'draLima',
            'email'             =>  'doctor3@gmail.com',
            'password'          =>  bcrypt('doctor.'),
            'type'              =>  'doctor',
            'personal_id'       =>  '3',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
          DB::table('users')->insert([
            'user'              =>  'drCruz',
            'email'             =>  'doctor4@gmail.com',
            'password'          =>  bcrypt('doctor.'),
            'type'              =>  'doctor',
            'personal_id'       =>  '4',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
           DB::table('users')->insert([
            'user'              =>  'drMacz',
            'email'             =>  'doctor5@gmail.com',
            'password'          =>  bcrypt('doctor.'),
            'type'              =>  'doctor',
            'personal_id'       =>  '5',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
            DB::table('users')->insert([
            'user'              =>  'draCanahui',
            'email'             =>  'doctor6@gmail.com',
            'password'          =>  bcrypt('doctor.'),
            'type'              =>  'doctor',
            'personal_id'       =>  '6',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
        //Enfermera
         DB::table('users')->insert([
            'user'              =>  'enfCordova',
            'email'             =>  'enfermera7@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '7',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
          DB::table('users')->insert([
            'user'              =>  'enfSoto',
            'email'             =>  'enfermera8@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '8',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
           DB::table('users')->insert([
            'user'              =>  'enfGonzalez',
            'email'             =>  'enfermera9@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '9',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
            DB::table('users')->insert([
            'user'              =>  'enfeRodiguez',
            'email'             =>  'enfermera10@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '10',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
             DB::table('users')->insert([
            'user'              =>  'enfMatias',
            'email'             =>  'enfermera11@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '11',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
              DB::table('users')->insert([
            'user'              =>  'enfdePaz',
            'email'             =>  'enfermera12@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '12',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
               DB::table('users')->insert([
            'user'              =>  'enfColoch',
            'email'             =>  'enfermera13@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '13',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
                DB::table('users')->insert([
            'user'              =>  'enfjRodriguez',
            'email'             =>  'enfermera14@gmail.com',
            'password'          =>  bcrypt('enfermera.'),
            'type'              =>  'enfermera',
            'personal_id'       =>  '14',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
        //laboratorio
        DB::table('users')->insert([
            'user'              =>  'laboratorio',
            'email'             =>  'laboratorio@gmail.com',
            'password'          =>  bcrypt('laboratorio.'),
            'type'              =>  'laboratorio',
            'personal_id'       =>  '5',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);
         DB::table('users')->insert([
            'user'              =>  'paraeliminar',
            'email'             =>  'paraeliminar@gmail.com',
            'password'          =>  bcrypt('eliminar.'),
            'type'              =>  'member',
            'personal_id'       =>  '8',
            'created_at'        =>  date("Y-m-d H:i:s") 
            ]);*/
    }
}
