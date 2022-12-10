@extends('layouts.plantilla')

@section('title', 'Crear')

@section('content')
    <h1>Pagina para crear proyectos nuevos</h1>

    <form action="{{route('proyectos.store')}}" method="POST">
        <!--TOKEN PARA EVITAR HACKEO-->
        @csrf

        
        <label>Nombre de proyecto</label>

        <!--En el value se uso old para guardar el valor escrito en la casilla y asi cuando se envie el form 
            y tenga error no se borre, para activar estas funciones en el controlladorProyecto tenemos que poner en la funcion
        la validacion del request-->
        
        <input type="text" name="nombre_proyecto" value="{{old('nombre_proyecto')}}">
        @error('nombre_proyecto')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>

        <label>Descripcion </label>
        <textarea name="desc_proyecto" rows="10">{{old('desc_proyecto')}}</textarea>
        @error('desc_proyecto')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        
        <label>Monto de Financiamiento </label>
        <input type="text" name="monto_inversion" value="{{old('monto_inversion')}}">
        @error('monto_inversion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>Instrumento de inversion</label>
        <select name="inst_inversion" >
            <option value="Deuda senior">Deuda Senior</option>
            <option value="Deuda preferente">Deuda preferente</option>
            <option value="Deuda Mezzanine">Deuda Mezzanine</option>
        </select>
       

        <br>
        
        <label>Plazo</label>
        <select name="plazo">
            <option value="3">3 Meses</option>
            <option value="6">6 Meses</option>
            <option value="9">9 Meses</option>
            <option value="12">12 Meses</option>
            <option value="18">18 Meses</option>
            <option value="24">24 Meses</option>
        </select>
       
        <br>
        
        <label>Pago de interes</label>
        <select name="pago_interes">
            <option value="trimestral">Trimestral</option>
            <option value="semestral">Semestral</option>
            <option value="anual">Anual</option>
        </select>
       
        <br>
        
        <label>Tasa Anual Fija</label>
        <input type="text" name="taf" placeholder="16.5" value="{{old('taf')}}">
        @error('taf')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        
        <label >Monto minino para invertir</label>
        <input type="text" name="min_inversion" placeholder="500" value="{{old('min_inversion')}}">
        @error('min_inversion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <label> Maximo de inversion</label>
        <input type="text" name="max_inversion" placeholder="10,000" value="{{old('max_inversion')}}">
        @error('max_inversion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>Comision de la plataforma</label>
        <input type="text" name="comision_plataforma" value="{{old('comision_plataforma')}}">
        @error('comision_plataforma')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>
        
        <label>Valor de Garantia</label>
        <input type="text" name="valor_garantia" value="{{old('valor_garantia')}}">
        @error('valor_garantia')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <label>TRI Anual Estimada</label>
        <input type="text" name="triae" value="{{old('triae')}}">
        @error('triae')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>

        <label>Fecha de finalizado de recoleccion</label>
        <input type="date" name="fecha_finalizado" value="{{old('fecha_finalizado')}}">
        @error('fecha_finalizado')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <label>Financiamiento sobre el costo</label>
        <input type="text" name="fsc" placeholder="33.56%" value="{{old('fsc')}}">
        @error('fsc')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <label>Fotografias</label>
        <input type="file" name="fotografias" value="{{old('fotografias')}}">

        <hr>

        <button type="submit">Crear Proyecto</button>


    </form>
@endsection