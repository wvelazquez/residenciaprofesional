@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Registra un nuevo proyecto</h1>
@stop

@section('content')
    <form action="{{ route('proyectos.store') }}" method="POST">
        <!--TOKEN PARA EVITAR HACKEO-->
        @csrf

        <input type="text" hidden value="" name="slug">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos generales</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--En el value se uso old para guardar el valor escrito en la casilla y asi cuando se envie el form
                                                     y tenga error no se borre, para activar estas funciones en el controlladorProyecto tenemos que poner en la funcion
                                                     la validacion del request-->

                        <div class="form-group">
                            <label for="nombre_proyecto">Nombre del proyecto</label>
                            <input type="text" name="nombre_proyecto" value="{{ old('nombre_proyecto') }}"
                                class="form-control">
                            @error('nombre_proyecto')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nombre_proyecto">Descripción del proyecto</label>
                            <textarea name="desc_proyecto" rows="10" class="form-control">{{ old('desc_proyecto') }}</textarea>
                            @error('desc_proyecto')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                            <br>
                        </div>

                        <div class="form-group">
                            <label for="nombre_proyecto">Selecciona el instrumento de inversion</label>
                            <select name="inst_inversion" class="form-control">
                                <option value="Deuda senior">Deuda Senior</option>
                                <option value="Deuda preferente">Deuda preferente</option>
                                <option value="Deuda Mezzanine">Deuda Mezzanine</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nombre_proyecto">Selecciona el instrumento de inversion</label>
                            <select name="plazo" class="form-control">
                                <option value="3">3 Meses</option>
                                <option value="6">6 Meses</option>
                                <option value="9">9 Meses</option>
                                <option value="12">12 Meses</option>
                                <option value="18">18 Meses</option>
                                <option value="24">24 Meses</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nombre_proyecto">Selecciona el instrumento de inversion</label>
                            <select name="pago_interes" class="form-control">
                                <option value="trimestral">Trimestral</option>
                                <option value="semestral">Semestral</option>
                                <option value="anual">Anual</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Fecha de finalizado de recoleccion</label>
                            <input class="form-control" type="date" name="fecha_finalizado"
                                value="{{ old('fecha_finalizado') }}">
                            @error('fecha_finalizado')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Cargar fotografias</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="fotografias" value="{{ old('fotografias') }}"
                                        class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Selecciona tu
                                        archivo</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Cargar</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos financieros</h3>
                        </div>
                    </div>
                    <div class="card-body">
                       
                        <div class="form-group">
                            <label for="nombre_proyecto">Monto de inversion</label>
                            <input type="text" name="monto_inversion" class="form-control"
                                value="{{ old('monto_inversion') }}">
                            @error('monto_inversion')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                            <br>
                        </div>

                        <div class="form-group">
                            <label for="nombre_proyecto">Monto de inversion</label>
                            <input type="text" name="taf" placeholder="16.5" value="{{ old('taf') }}"
                                class="form-control">
                            @error('taf')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                            <br>
                        </div>

                        <div class="form-group">
                            <label>Monto minino para invertir</label>
                            <input type="text" class="form-control" name="min_inversion" placeholder="500"
                                value="{{ old('min_inversion') }}">
                            @error('min_inversion')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label> Maximo de inversion</label>
                            <input class="form-control" type="text" name="max_inversion" placeholder="10,000"
                                value="{{ old('max_inversion') }}">
                            @error('max_inversion')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                            <br>
                        </div>

                        <div class="form-group">
                            <label>Comision de la plataforma</label>
                            <input class="form-control" type="text" name="comision_plataforma"
                                value="{{ old('comision_plataforma') }}">
                            @error('comision_plataforma')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Valor de Garantia</label>
                            <input class="form-control" type="text" name="valor_garantia"
                                value="{{ old('valor_garantia') }}">
                            @error('valor_garantia')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>TRI Anual Estimada</label>
                            <input class="form-control" type="text" name="triae" value="{{ old('triae') }}">
                            @error('triae')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Financiamiento sobre el costo</label>
                            <input class="form-control" type="text" name="fsc" placeholder="33.56%"
                                value="{{ old('fsc') }}">
                            @error('fsc')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Registrar Proyecto</button>
                </div>
            </div>
    </form>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
