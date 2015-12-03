

@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>Base de datos Coneccion</p>
@endsection

@section('content')

{{$contenido}}


@foreach($contenido as $conte)

{{$conte->color}}

@endforeach


@endsection
