<?php

//* @var \Illuminate\Database\Eloquent\Factory $factory */
use App\categoria;
use Faker\Generator as Faker;

$factory->define(categoria::class, function (Faker $faker){
    return [
            'nombre' => $faker->name
            'email' => $faker -> email,
        'telefono' => $faker -> number,
        'edad' =>$faker->edad,
        'profesion' =>$faker->profesion
    ];
    
});