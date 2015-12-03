<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Requests;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        $brand = Brand::get();        
        return view('Transporte.brand.index')->with($brant);
    }   
    public function crear(Request $request)
    {
        $brand = new Brand();
        $brand->nombre = $request->nombre;
        $brand->save();
        return view('Transporte.brand.crea')->with();
    }  
     
}
