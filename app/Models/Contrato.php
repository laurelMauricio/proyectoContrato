<?php

namespace App\Models;
use App\Models\Persona;
use App\Models\Contrato;
use App\Models\UnidadSolicitante;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table='contrato';
    protected $primaryKey='idc';
    protected $fillable=['idc','ci_persona','id_unidsolic'];
    
    public function persona(){
        return $this->belongsTo('App\Models\Persona','ci_persona','ci_p');//'ci_p'-> clase Persona
    }

    public function unidadsolicitante(){
        return $this->belongsTo('App\Models\UnidadSolicitante','id_unidsolic','id_US');
    }
        
    public function scopeNombreunidsolic($query, $nombre_US){
        if (trim($nombre_US) !=""){
            
            $query->where('nombre_US','LIKE',"$nombre_US%");
            
        }

    }
    
    public function scopeIdunidsolic($query, $id_unidsolic){
        if (trim($id_unidsolic) !=""){
            
            $query->where('id_unidsolic','LIKE',"$id_unidsolic%");
            
        }

    }
    
    public function scopeCipersona($query, $ci_persona){
        if (trim($ci_persona) !=""){
            
            $query->where('ci_persona','LIKE',"$ci_persona%");
            
        }

    }
    
    public function scopePrimernom($query, $primer_nom){
        if (trim($primer_nom) !=""){ //'trim' eliminar espacios en blanco
            
            $query->where('primer_nom','LIKE',"$primer_nom%");
            
        }

    }
        
    public function scopePaterno($query, $paterno){
        if (trim($paterno) !=""){
            
            $query->where('paterno','LIKE',"$paterno%");
            
        }

    }
    /*
    
    */
    
    
}
