<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\UnidadSolicitante;

$factory->define(UnidadSolicitante::class, function (Faker $faker) {
    return [
        'nombre_US'=>$faker->word,
    ];
});
