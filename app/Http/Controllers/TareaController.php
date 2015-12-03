<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Requests;
use App\Http\Controllers\Controller;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function trabajo()
    {
        $i=0;
        $array_datos[$i]['nom_jugador']= "Sebastian";
        $array_datos[$i]['fec_nacimiento'] = "2015-11-29 00:00:00";
        $array_datos[$i]['lugar_nacimiento']= "Bogota";
        $i++;
        $array_datos[$i]['nom_jugador']= "Daniel";
        $array_datos[$i]['fec_nacimiento'] = "1994-10-29 00:00:00";
        $array_datos[$i]['lugar_nacimiento']= "Bogota DC";
        
        return view('Tarea.taller')->with('array_datos', $array_datos);
    }   
    public function gettrabajo(Request $request)
    {
        
        $i=0;
        $array_datos[$i]['nom_jugador']= "Sebastian";
        $array_datos[$i]['apellido'] = "Perez";
        $array_datos[$i]['lugar_nacimiento']= "Bogota";
        $i++;
        $array_datos[$i]['nom_jugador']= "Daniel";
        $array_datos[$i]['apellido'] = "Diaz";
        $array_datos[$i]['lugar_nacimiento']= "Bogota DC";        
        $i++;
        $array_datos[$i]['nom_jugador']= $request->input('nameJugador');
        $array_datos[$i]['apellido'] = $request->input('apellidoJugador');
        $array_datos[$i]['lugar_nacimiento']= $request->input('ciudadJugador');      
      
        return view('Tarea.taller')->with('array_datos', $array_datos);
    }   
   
    public function gettrabajodis()
    {
        $s = Input::all();
        $va = $s['nameJugador'];
        print_r($va);exit;     
              $i=0;
        $array_datos[$i]['nom_jugador']= "Sebastian";
        $array_datos[$i]['fec_nacimiento'] = "2015-11-29 00:00:00";
        $array_datos[$i]['lugar_nacimiento']= "Bogota";
        $i++;
        $array_datos[$i]['nom_jugador']= "Daniel";
        $array_datos[$i]['fec_nacimiento'] = "1994-10-29 00:00:00";
        $array_datos[$i]['lugar_nacimiento']= "Bogota DC"; 
        return view('Tarea.taller')->with('array_datos', $array_datos);
    }   
}
