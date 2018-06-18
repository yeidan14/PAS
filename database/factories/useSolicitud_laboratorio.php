<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\solicitud_laboratorio::class, function (Faker  $faker) {
    return [
    	'id'=>null,
        'id_laboratorio'=> $faker->numberBetween($min=1,$max=4),
        'id_persona'=>$faker->numberBetween($min=1,$max=6),
        'justificacion'=>$faker->text($maxNbChars = 200),
        'fecha'=>$faker->date($format='Y-m-d',$min='now'),
        'hora_inicio'=>$faker->time($format = 'H:i'),
        'hora_fin'=>$faker->time($format = 'H:i'),
        'id_esolicitud'=> $faker->numberBetween($min=1,$max=3),        
               ];
});
