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

$factory->define(App\admin::class, function (Faker  $faker) {
    return [
    	'id'=>null,
        'codigo'=> $faker->numberBetween($min=10000,$max=90000),
        'nombre'=>$faker->firstName,
        'apellidos'=>$faker->lastName,
        'correo'=>$faker->email,
        'dependencia'=>$faker->word,
        'telefono'=>$faker->PhoneNumber,
        'direccion'=>$faker->address,
        'clave'=>$faker->password,
        'tipo_persona'=> $faker->numberBetween($min=1,$max=2),        
               ];
});
