<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';
    protected $primaryKey='ci_p';
    protected $fillable=['ci_p','primer_nom','seg_nom','paterno','materno'];
    
    //Llenado masivo. Permisos para llenar estos campos
        //protected $fillable=['primer_nom'];
    //protected $fillable=['seg_nom'];
    //protected $fillable=['paterno'];
    //protected $fillable=['materno'];

    
}
