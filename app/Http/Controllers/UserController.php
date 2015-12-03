<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsers()
    {
        // $result = \DB::table('users')
        //                 ->select('name','type')
        //                 ->get();
        $result  = User::paginate();
        // dd($result);
        return view('prueba.user', ['array' => $result]);
    }

    public function valida(Request $request){

        
        if($request->input('Login') == 0){
            $user = $request->input('user'); 
            $pss = $request->input('passwd');

            $result = \DB::table('users')
                            ->whereNameAndPassword($user,$pss)
                            ->first();

            if(isset($result) && !empty($result)){
                return view('welcome',['nombre'=> $result->name]);
            }else{
                return redirect()->action('HomeController@index');
            }
        }else{
            return view('auth.logoout');
        }
    }

    public function deleteUsers(Request $request)
    {   
        $result = User::destroy($request->input('id'));
        if($result){
            return Session::flash('message', 'My message');
        }else{
            return Session::flash('message', 'My message1');
        }
         
    }

    public function updateUsers(Request $request)
    {
        $id = $request->input('id');
        return 'Borrar '.$id;
    }




    
}
