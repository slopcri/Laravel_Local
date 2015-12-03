<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Autobus;

class AutobusController extends \App\Http\Controllers\Controller {
   
    public function index()
    {

       
	$contenido = autobus::get();
	return view('autobus.default', ['contenido' => $contenido]);


    }

     



    
}
