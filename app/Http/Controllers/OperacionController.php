<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OperacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function suma()
    {

        $valor1 = "";
        $valor2 = "";
        $total = "";
     
        $array = "";

        return view('operacion.suma', ['array' => $array, 'valor1' => $valor1, 'valor2' => $valor2,'total' => $total]);


    }

      public function getsumar(Request $request)
    {


        $valor1 = $request->input('valor1'); 
        $valor2 = $request->input('valor2'); 
        $total = $valor1 + $valor2;
        $array = ['valor1' => 23, 'valor2' => 232, 'total' => 34];



        return view('operacion.suma', ['array' => $array, 'valor1' => $valor1, 'valor2' => $valor2,'total' => $total]);
    }


        //return view('operacion.suma');
       
        //return Response()->json($appliedproduct);



      public function getsuma($valor1, $valor2)
    {

        $total = $valor1 + $valor2;

   

        $array = ['valor1' => $valor1, 'valor2' => $valor2, 'total' => $total];


        //return view('operacion.suma', compact('total','valor1', 'valor2'));
        //return view('operacion.suma');
       
        return Response()->json($array);

    }



    
}
