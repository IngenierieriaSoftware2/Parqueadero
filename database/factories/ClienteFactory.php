<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        //
        'placa'=>$faker->unique()->randomNumber,
        'hora_ingreso'=> now(),
        'tarifa'=>1500
    ];
});
