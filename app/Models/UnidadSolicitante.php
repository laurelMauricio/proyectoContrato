<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UnidadSolicitante extends Model
{
    protected $table='unidadsolicitante';
    protected $primaryKey='id_US';
    protected $fillable=['id_US','nombre_US'];
}
