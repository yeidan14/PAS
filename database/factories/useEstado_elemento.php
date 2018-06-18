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

$factory->define(App\estado_elemento::class, function (Faker $faker) {
    return [
    	'id'=>null,
        'nombre' => $faker->randomElement($array=array('Dispobible','Mantenimiento','Dañado')),
       ];
});
