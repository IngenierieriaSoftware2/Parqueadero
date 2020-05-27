<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Zona;
use Faker\Generator as Faker;

$factory->define(Zona::class, function (Faker $faker) {
    return [
        'estado'=> 0 // Inicialmente está vacio 0-> vacio , 1-> ocupado
    ];
});
