@extends('layouts.master')
@section('title', 'Tablas')
@section('header')
    <h1>
        Poetas
    </h1>
@stop

@section('content')
    <div>
        <a href="{{action('Poet_Crud@create')}}">Agregar Nuevo Poeta <img src="{{url('/images/toggles/new_user.png')}}" alt="Agregar"></a>
    </div>

    <table class="table table-hover table-dark">
        <thead>
        <tr>

            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Borrar</th>


        </tr>
        </thead>
        <tbody>
        @foreach($poetas as $poet)
            <tr>

                <td>{{$poet -> Nombre}}</td>
                <td>{{$poet -> Apellido}}</td>
                <td><a href="{{action('Poet_Crud@show', ['id' => $poet->idPoeta])}}"><img src="{{url('/images/toggles/refresh.png')}}" alt="Actualizar"></a> </td>
                <td><a href="{{action('Poet_Crud@destroy', ['id' => $poet->idPoeta])}}"><img src="{{url('/images/toggles/delete.png')}}" alt="Borrar"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop

@section('footer')
    <h5 id="derechos">Derechos reservados - Emiliano Loya Flores 5°E - {{date('Y')}}</h5>

    <img src="/images/LogoToledo.png" alt="Logo">
@stop