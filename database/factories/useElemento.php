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

$factory->define(App\elemento::class, function (Faker  $faker) {
    return [
    	'id'=>null,
        'sn'=> $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
        'nombre' => $faker->randomElement($array=array('Tablets','Computador','Portatil','lapiz_Digital','videobeams','sonido')),
        'descripcion'=>$faker->text($maxNbChars = 200) ,
        'id_laboratorio'=> $faker->numberBetween($min=1,$max=4), 
        'id_estado'=> $faker->numberBetween($min=1,$max=3),        
               ];
});
