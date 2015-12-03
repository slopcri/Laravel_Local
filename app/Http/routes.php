<?php

Route::get('/', 'HomeController@index');
Route::post('/valida', 'UserController@valida');
Route::get('/usuarios', 'UserController@getUsers');
Route::post('/usuarios/d', 'UserController@deleteUsers');
Route::post('/usuarios/u', 'UserController@deleteUsers');

Route::get('/welcome',function(){
	return view('welcome');
 });

Route::get('ruta',function(){
    return 'Prueba de ruta!';
}); 

Route::get('ruta/{valor1}/{valor2}',function($valor1,$valor2){
    $total = $valor1 - $valor2;
    return 'El valor es '.$total ;
}); 

Route::get('vista',function(){
    return view('prueba.vista');
}); 


Route::get('vista/{valor}/{valor1}',function($valor1,$valor2){
    return view('prueba.vista')->with($valor1,$valor2);
}); 

Route::get('adminer', function () {
    return view('adminer.index');
});


Route::controllers([
	'auth'=>'Auth\AuthController',
	'password'=>'Auth\PasswordController'
]);



Route::get('prueba/control-vista', 'PruebaController@vista');
Route::post('prueba/control-result', 'PruebaController@resultado');

Route::get('operacion/suma', 'OperacionController@suma');
Route::get('operacion/sumar', 'OperacionController@getsumar');
Route::get('operacion/suma/valor1/{valor1}/valor2/{valor2}', 'OperacionController@getsuma');



