<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Requests;
use App\Models\Brand;
use App\Models\Model;
use App\Models\Transport;
//use App\Models\User;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        $transport = Transport::get();        
        return view('Transporte.index')->with($transport);
    }   
    public function crear()
    {
        $transport = new Transport();
//        $transport->modelo_id = $request->modelo_id;        
//        $transport->marca_id = $request->marca_id;        
//        $transport->user_id = $request->user_id;        
//        $transport->nombre = $request->nombre; 
        
        $transport->model_id = 1;
        $transport->brand_id = 1;
        $transport->user_id = 1;
        $transport->nombre = 1;
        $transport->save();
        
        return view('Transporte.crear');
    }   
    public function creartipo($tipo)
    {
                
    }   
     
}
