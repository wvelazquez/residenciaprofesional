@extends('adminlte::page')

@section('title', $proyecto->nombre_proyecto)

@section('content_header')
    <h1>Vista general de proyecto</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detalles general del proyecto</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                        <div class="card-body p-0">
                            <table class="table table-striped text">
                                <thead>
                                    <tr>
                                        <th class="col-4">Monto Financiamiento</th>
                                        <th class="col-4">Maximo Financiamiento</th>
                                        <th class="col-4">Min Inversion P.U</th>
  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-4">${{ $proyecto->monto_inversion }}</td>
                                        <td class="col-4">${{ $proyecto->max_inversion }} </td>
                                        <td class="col-4">${{ $proyecto->min_inversion }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body p-0">
                            <table class="table table-striped text">
                                <thead>
                                    <tr>
                                        <th class="col-4">Plazo</th>
                                        <th class="col-4">Pago de interes </th>
                                        <th class="col-4">Tasa Anual Fija</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-4">{{ $proyecto->plazo }} Meses</td>
                                        <td class="col-4">{{ $proyecto->pago_interes }} </td>
                                        <td class="col-4">{{ $proyecto->taf }} %</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body p-0">
                            <table class="table table-striped text">
                                <thead>
                                    <tr>
                                        <th class="col-4">Comision de la plataforma</th>
                                        <th class="col-4">TRIAE </th>
                                        <th class="col-4">Valor de la garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-4">{{ $proyecto->comision_plataforma }} %</td>
                                        <td class="col-4">{{ $proyecto->triae }} %</td>
                                        <td class="col-4">${{ $proyecto->valor_garantia }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h4>Fotos del proyecto </h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox"
                                            data-title="sample 1 - white" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2"
                                                alt="white sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox"
                                            data-title="sample 2 - black" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2"
                                                alt="black sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3"
                                            data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3"
                                                class="img-fluid mb-2" alt="red sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4"
                                            data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4"
                                                class="img-fluid mb-2" alt="red sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox"
                                            data-title="sample 5 - black" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2"
                                                alt="black sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox"
                                            data-title="sample 6 - white" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2"
                                                alt="white sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox"
                                            data-title="sample 7 - white" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2"
                                                alt="white sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox"
                                            data-title="sample 8 - black" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2"
                                                alt="black sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9"
                                            data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9"
                                                class="img-fluid mb-2" alt="red sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10"
                                            data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FFFFFF?text=10"
                                                class="img-fluid mb-2" alt="white sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11"
                                            data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FFFFFF?text=11"
                                                class="img-fluid mb-2" alt="white sample">
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/000000.png?text=12"
                                            data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/000000?text=12"
                                                class="img-fluid mb-2" alt="black sample">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{ $proyecto->nombre_proyecto }}</h3>
                    <p class="text-muted">{{ $proyecto->desc_proyecto }}</p>

                    <h5 class="mt-5 text-muted">Archivos del proyecto</h5>
                    <ul class="list-unstyled">
                        
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                UAT.pdf</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                UAT.pdf</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                UAT.pdf</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                UAT.pdf</a>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-">
                <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-info form-group">Corregir proyecto</a>
            </div>
            <div class="col-md-3">
                <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>

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
