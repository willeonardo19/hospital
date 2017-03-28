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
    }
}
