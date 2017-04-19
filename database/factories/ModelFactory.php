<?php
use Carbon\Carbon;
use Faker\Generator;
use hospital\Personal;
use hospital\Paciente;
use hospital\Consulta;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*$factory->define(hospital\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

*/
$factory->define(Personal::class, function(Generator $faker){
		$array	=	[
			'nombre'			=>		$faker->firstName,
			'apellido'			=>		$faker->lastName,
			'telefono'			=>		$faker->phoneNumber,
			'direccion'			=>		$faker->address,
			'fechna'			=>		$faker->date,
			'sexo'				=>		'masculino',
			'dpi'				=>		$faker->numberBetween(111111111,999999999).$faker->numberBetween(1501,1508),
			'contacemer'		=>		$faker->firstName.' '.$faker->lastName,
			'contacttel'		=> 		$faker->phoneNumber,			
			'created_at' 		=>		Carbon::now()//$faker->dateTime()//date("Y-m-d H:i:s")
		];

		return $array;

});

$factory->define(Paciente::class, function(Generator $faker){
		$array	=	[
			'cod_pac'			=>		$faker->numberBetween(1,999).'-'.$faker->numberBetween(1,999),
			'dpi'				=>		$faker->numberBetween(111111111,999999999).$faker->numberBetween(1501,1508),
			'nombre'			=>		$faker->firstName,
			'apellido'			=>		$faker->lastName,
			'telefono'			=>		$faker->phoneNumber,
			'fech_na'			=>		$faker->date,
			'sexo'				=>		'masculino',
			'est_civ'			=>		'soltero',
			'ocupacion'			=>		$faker->jobTitle,
			'direccion'			=>		$faker->address,
			'contacemer'		=>		$faker->firstName.' '.$faker->lastName,
			'contacttel'		=> 		$faker->phoneNumber,			
			'created_at' 		=>		Carbon::now()//$faker->dateTime()//date("Y-m-d H:i:s")
		];

		return $array;

});

$factory->define(Consulta::class, function(Generator $faker){
		$array	=	[
			'paciente_id'			=>		$faker->numberBetween(1,100),
			'preconsulta_id'		=>		null,
			'diagnostico_med_id'	=>		null,
			'estado'				=>		'solicitada'
			
		];

		return $array;

});
$factory->define(Consulta::class, function(Generator $faker){
		$array	=	[
			'paciente_id'			=>		$faker->numberBetween(1,100),
			'preconsulta_id'		=>		null,
			'diagnostico_med_id'	=>		null,
			'estado'				=>		'proceso'
			
		];

		return $array;

});
/*$factory->define(Consulta::class, function(Generator $faker){
		$array	=	[
			'paciente_id'			=>		$faker->numberBetween(1,100),
			'preconsulta_id'		=>		null,
			'diagnostico_med_id'	=>		null,
			'estado'				=>		'finalizada'
			
		];

		return $array;

});*/