

@extends('layouts.master')

@section('title', 'Usuarios')

@section('sidebar')
    @parent

    <p>Usuarios</p>
@endsection

@section('content')
	@if($array)
		<form  method='POST' action='{{ url ('/usuarios/d' )}}'>
			<table  class="table table-hover">
				<th>Nombre</th>
				<th>Tipo</th>
					@forelse($array as $user)
						<tr>
					 		<td style ='border: 1px solid #93C9FF'>{{$user->name}}</td>
					 		<td style ='border: 1px solid #93C9FF'>{{$user->type}}</td>	
					 		<td style ='border: 1px solid #93C9FF'>
					 			<button type="submit" class="btn btn-default" name='id' value='{{$user->id}}'>Borrar</button>
					 		</td>
					 		<input name="_token" hidden value="{!! csrf_token() !!}" />
				 		</tr>
				 	@empty
				 		<p>No se encontraron usuarios!!!</p>
					@endforelse
			</table> 
		</form>
		{!! $array->render() !!}
	@endif
@endsection

