<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\Persona;
use App\Models\UnidadSolicitante;
use DB;
class ContratoController extends Controller
{   
    
    public function index(Request $request){
        $ci_persona=$request->get('ci_persona');
        $paterno=$request->get('paterno');
        $primer_nom=$request->get('primer_nom');
        //$id_unidsolic=$request->get('id_unidsolic');
        $nombre_US=$request->get('nombre_US');
        
        
        $users = Contrato::orderBy('idc')
                ->join('persona', 'persona.ci_p', '=','contrato.ci_persona')
                ->join('unidadsolicitante', 'unidadsolicitante.id_US', '=','contrato.id_unidsolic')
                //->select('contrato.ci_persona', 'persona.primer_nom','persona.paterno')
                //->where('ci_persona', 'LIKE', "$ci_persona%")
                ->cipersona($ci_persona)
                //->where('paterno', 'LIKE', "$paterno%")
                ->paterno($paterno)
                //->where('primer_nom', 'LIKE', "$primer_nom%")
                ->primernom($primer_nom)
                //->where('nombre_US', 'LIKE', "$nombre_US%")             
                ->nombreunidsolic($nombre_US)
                ->get();
        
        return view('contrato',compact('users'));
    }
    
    
    /*
    
    public function index(Request $request){
        
        $users = Contrato::Primernom($request->primer_nom)
                ->join('persona', 'persona.ci_p', '=','contrato.ci_persona')
                ->select('contrato.ci_persona', 'persona.primer_nom','persona.paterno')
                ->get();
        
        return view('contrato',compact('users'));
    }
    
    
    $data = DB::table('contrato')
    public function index(Request $request){
  
        $users = Contrato::Primernom($request->primer_nom)->paginate();
               
            return view('contrato', compact('users'));
    }
    */
    
    






















    
    /*
    public function index(Request $request){
        
        //dd($request->persona->primer_nom);

        $users = Contrato::orderBy('idc', 'DESC')->paginate();
               
            return view('contrato', compact('users'));
    }
    */
    
    
    
    /*
    public function index(Request $request){
        
        $ci_persona = $request->get('ci_persona');
        
        $users = Contrato::orderBy('idc', 'DESC')
            ->where('ci_persona','LIKE',"$ci_persona%")
            ->paginate(4);
        
            return view('contrato', compact('users'));
    }
       
    
    public function index2(){
        //$ci_persona = $request->get('ci_persona');
        /*
        $idc = Contrato::select('idc', 'ci_persona')
                ->where('ci_persona','2301289')->value('idc');
        $ci_persona2 = Contrato::select('idc', 'ci_persona')
                ->where('idc','1')->value('ci_persona');
                
        $ci_p = Persona::select('ci_p', 'primer_nom')         
                ->where('ci_p','2301289')->value('ci_p');
        
                $primer_nom = Persona::select('ci_p', 'primer_nom')         
                ->where('ci_p','2301289')->value('primer_nom');
            return view('index2', compact('idc','ci_persona2','ci_p','primer_nom'));
          
        $datos = request()->all();    
        return view('index2',compact('datos'));
    }
    */
}
