
@extends('layouts.master')

@section('title', 'Vista')

@section('content')


	<?php
		$array []= array('nom'=>"2",'val'=>"2");
		$array []= array('nom'=>"2",'val'=>"2");
		$array []= array('nom'=>"2",'val'=>"2");

	?>
	<h6>Prueba de ingreso a vista directo de la ruta!</h6>
	@foreach($array as $a)
		@foreach($a as $nom => $a1)
			 <label>{{$nom.' '.$a1}}</label>
		 @endforeach
	@endforeach


	@if(isset($user) && !empty($user))
	<label>{{$user}}</label>
	@endif

	@if(isset($passwd) && !empty($passwd))
		<label>{{$passwd}}</label>
	@endif

@endsection