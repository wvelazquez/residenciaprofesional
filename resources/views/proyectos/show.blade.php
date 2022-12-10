@extends('layouts.plantilla')

@section('title', $proyecto->nombre_proyecto)


@section('content')
    <h1>Bienvenido al curso {{$proyecto->nombre_proyecto}}</h1>
    <a href="{{route('proyectos.index')}}">Volver </a>

    <br>
    <a href="{{route('proyectos.edit', $proyecto)}}">Editar Proyecto</a>
    <p>Descripcion: {{$proyecto->desc_proyecto}}</p>
    <p>Plazo: {{$proyecto->plazo}}</p>
    <p>Metodo de pago interes: {{$proyecto->pago_interes}}</p>
    <p>Tasa Anual Fij: {{$proyecto->taf}}</p>
    <p>Monto minimo de inversion: {{$proyecto->min_inversion}}</p>

    <form action="{{route('proyectos.destroy', $proyecto)}}" method="POST">
        @csrf
        @method('delete')

        <button type="submit">Eliminar</button>
    </form>
@endsection