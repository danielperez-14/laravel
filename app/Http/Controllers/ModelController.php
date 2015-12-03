<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Requests;
use App\Http\Controllers\Controller;
use App\Models\Model;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {      
        $model = Model::get();        
        return view('Transporte.modelo.index')->with($model);
    }   
    public function crear(Request $request)
    {
        $model = new Model();
        $model->nombre = $request->nombre;        
        $model->save();
        
        return view('Transporte.modelo.crea')->with();
    } 
     
}
