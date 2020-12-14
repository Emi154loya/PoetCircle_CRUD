@extends('layouts.master')

@if(isset($poet) and is_object($poet))
    @php
        $title = 'Modificacion de un Usuario';
        $id = $poet->idPoeta;
        $Nombre = $poet->Nombre;
        $Apellido = $poet->Apellido;
        $boton = 'Actualizar';
    @endphp
@else
    @php
        $title = 'Alta de Usuario';
        $id = '';
        $Nombre = '';
        $Apellido = '';
        $boton = 'Insertar';
    @endphp
@endif

@section('title', 'Tablas')
@section('header')
    <h1>
        {{$title}}
    </h1>
@stop

@section('content')

    <form action="{{isset($poet) ? action('Poet_Crud@update'):action('Poet_Crud@store')}}" method="post">
        {{csrf_field()}}

        @if(isset($poet) and is_object($poet))
            <input type="hidden" name="id" value="{{$id}}">
        @endif


        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="{{$Nombre}}">
        <br>
        <label for="Apellido">Apellido</label>
        <input type="text" name="Apellido" value="{{$Apellido}}">
        <br>
        <input type="submit" value="{{$boton}}">
    </form>


@stop

@section('footer')
    @parent
@stop