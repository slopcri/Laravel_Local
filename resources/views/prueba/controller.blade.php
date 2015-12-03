

@extends('layouts.master')

@section('title', 'Controlador')

@section('sidebar')
    @parent

    <p>Persona</p>
@endsection

@section('content')

<form  role="form" method="post" action="{{ url('/prueba/control-result') }}">

	<div>
		<label >Nombre</label>
		<div >
			<input type="text"  name="nombre" value="{{$nombre}}">
		</div>
	</div>

	<div >
		<label >Apellido</label>
		<div >
			<input type="text"  name="apellido" value="{{$apellido}}">
		</div>
	</div>

	<div >
		<label >Telefono</label>
		<div >
			<input type="text"  name="telefono" value="{{$telefono}}">
		</div>
	</div>
	<div >
		<div >
			<button type="submit" >Agregar</button>
		</div>
	</div>
	<input name="_token" hidden value="{!! csrf_token() !!}" />
</form>
@endsection

@section('result')
<div>
	@if($arrays)
		<table>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Telefono</th>
			<tr>
				@foreach($arrays as $key => $val)
			 		<td style ='border: 1px solid #93C9FF'>{{$val}}</td>	
				@endforeach
			</tr>
		</table> 
	@endif
</div>
@endsection


