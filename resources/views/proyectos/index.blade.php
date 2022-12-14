@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Proyectos</h1>
@stop

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listado de proyectos en el sistema</h3>
            <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                    {{ $proyectos->links() }}
                </ul>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Proyecto</th>
                        <th>Accion </th>
                        <th style="width: 40px">Alerta</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                        <tr>

                            <td>{{ $proyecto->id }}</td>
                            <td>{{ $proyecto->nombre_proyecto }}</td>
                            <td>
                                <div class="form-group">
                                    <a href="{{ route('proyectos.show', $proyecto) }}" class="btn btn-primary">EDITAR</a>
                                </div>
                            </td>
                            <td><span class="badge bg-success">COMPLETADO</span></td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>

    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
