<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        		'user'		=>	'leonardosoftadmin',
        		'password'	=>	bcrypt('admin.'),
        		'type'		=> 	'admin'

        	]);
    }
}
