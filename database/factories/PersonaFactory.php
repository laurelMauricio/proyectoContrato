<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Persona;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'ci_p'=>$faker->unique()->randomNumber(7),
        'primer_nom'=>$faker->name,
        
        'seg_nom'=>$faker->name,
        'paterno'=>$faker->lastName,
        'materno'=>$faker->lastName,
    ];
});
