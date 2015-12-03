

@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>Menu</p>
@endsection

@section('content')

<form class="form-horizontal" role="form" method="get" action="{{ url('/operacion/sumar') }}">

	<div class="form-group">
		<label class="col-md-4 control-label">valor 1</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="valor1" value="{{$valor1}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">valor 2</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="valor2" value="{{$valor2}}">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">total</label>
		<div class="col-md-6">{{$total}}</div>
	</div>
	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary">Sumar</button>
		</div>
	</div>
</form>
@endsection



