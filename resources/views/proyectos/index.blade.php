@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Pagina principal de proyectos</h1>
    <a href="{{route('proyectos.create')}}">Crear Proyecto</a>
    <ul>
        @foreach ($proyectos as $proyecto)
            <li><a href="{{route('proyectos.show', $proyecto)}}">{{$proyecto->nombre_proyecto}}</a></li>
 
        
        @endforeach
    </ul>

    {{$proyectos->links()}}
@endsection