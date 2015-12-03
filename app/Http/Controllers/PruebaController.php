<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


use App\Http\Requests;
use App\Http\Controllers\Controller;



class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function vista(){
        $nom = "";
        $ape = "";
        $tel = "";
        $arrays = array();
        return view('prueba.controller', ['nombre' => $nom, 'apellido' => $ape,'telefono' => $tel])->with('arrays',$arrays);
    }

    public function resultado(Request $request){
        
        $nom = $request->input('nombre'); 
        $ape = $request->input('apellido');
        $tel = $request->input('telefono');
        $array_re = array('valor1' => $nom, 'valor2' => $ape, 'valor3' => $tel);  
        return view('prueba.controller',['nombre' => '', 'apellido' => '','telefono' => ''])->with('arrays',$array_re);
    }

    //  public function viewUsers()
    // {
    //     $users = User::paginate();
    //     return view('prueba.user', ['array' => $users]);
    // }

  

  
}
