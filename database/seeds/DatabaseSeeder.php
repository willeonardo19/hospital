<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(personalSeeder::class);
        $this->call(usuarioSeeder::class);
        $this->call(pacienteSeeder::class);
        $this->call(consultaSeeder::class);
        $this->call(ExamensSeeder::class);
    }
}
