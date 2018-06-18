<?php

use Faker\Generator as Faker;
use App\solicitud_promedia;
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

$factory->define(App\solicitud_promedia::class, function (Faker  $faker) {
    return [
    	'id'=>null,
        'id_persona'=>$faker->numberBetween($min=1,$max=6),
        'descripcion'=>$faker->text($maxNbChars = 200),
        'fecha'=>$faker->date($format='Y-m-d',$min='now'),
        'hora_inicio'=>$faker->time($format = 'H:i', $max = '14:00:00',$min='08:00:00'),
        'hora_fin'=>$faker->time($format = 'H:i'),
        'palabras_clave'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'materia'=>$faker->word,
        'entidad'=>$faker->word,
        'id_esolicitud'=> $faker->numberBetween($min=1,$max=3),        
               ];
});
