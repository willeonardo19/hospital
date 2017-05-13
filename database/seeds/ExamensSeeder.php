<?php

use Illuminate\Database\Seeder;

class ExamensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examen')->insert([
        	'examen'			=> 	'Hematología',
        	'created_at' 		=> date("Y-m-d H:i:s") 
        ]);
        DB::table('examen')->insert([
        	'examen'			=> 	'Heces',
        	'created_at' 		=> date("Y-m-d H:i:s") 
        ]);
        DB::table('examen')->insert([
        	'examen'			=> 	'Orina',
        	'created_at' 		=> date("Y-m-d H:i:s") 
        ]);
    }
}
