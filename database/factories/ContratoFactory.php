<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Contrato;
use App\Models\Persona;
use App\Models\UnidadSolicitante;

$factory->define(Contrato::class, function (Faker $faker) {
    $dato2=UnidadSolicitante::all();
    $dato1=Persona::all();
    //dd($dato);
    $reg1=$dato1->random();
    $reg2=$dato2->random();
    return [
        
        'ci_persona'=>$reg1->ci_p,
        'id_unidsolic'=>$reg2->id_US,

        

    ];
});
