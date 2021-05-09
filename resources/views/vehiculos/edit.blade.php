@extends('layouts.main')
@section('content')
<div class="container py-3">
    <form action="{{route('vehiculos.update',$vehiculo->id)}}" method='post'>
        @csrf
        @method('PATCH')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="placa">Placa</label>
                <input required type="text" class="form-control mayus" id="placa" name="placa" value="{{$vehiculo->placa}}">
            </div>
            <div class="form-group col-md-6">
                <label for="numDocumento">Número de documento del propietario</label>
                <input required type="text" class="form-control capital" id="numDocumento" name="numDocumento"
                    value="{{$vehiculo->numDocumento}}">

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="marca">Marca</label>
                <input required type="text" class="form-control capital" id="marca" name="marca" value="{{$vehiculo->marca}}">
            </div>
            <div class="form-group col-md-4">
                <label for="linea">Linea</label>
                <input required type="text" class="form-control capital" id="linea" name="linea" value="{{$vehiculo->linea}}">
            </div>
            <div class="form-group col-md-4">
                <label for="modelo">Modelo</label>
                <input required type="text" class="form-control capital" id="modelo" name="modelo"
                    value="{{$vehiculo->modelo}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="c">Cilindraje</label>
                <input required type="text" class="form-control capital " id="cc" name="cc" value="{{$vehiculo->cc}}">
            </div>
            <div class="form-group col-md-4">
                <label for="color">Color</label>
                <input required type="text" class="form-control capital" id="color" name="color" value="{{$vehiculo->color}}">
            </div>
            <div class="form-group col-md-4">
                <label for="servicio">Servicio</label>
                <input required type="text" class="form-control capital" id="servicio" name="servicio"
                    value="{{$vehiculo->servicio}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="clase">Clase de vehículo</label>
                <input required type="text" class="form-control capital" id="clase" name="clase" value="{{$vehiculo->clase}}">
            </div>
            <div class="form-group col-md-3">
                <label for="carroceria">Tipo Carrocería</label>
                <input required type="text" class="form-control capital" id="carroceria" name="carroceria"
                    value="{{$vehiculo->carroceria}}">
            </div>
            <div class="form-group col-md-3">
                <label for="combustible">Combustible</label>
                <input required type="text" class="form-control capital" id="combustible" name="combustible"
                    value="{{$vehiculo->combustible}}">
            </div>
            <div class="form-group col-md-3">
                <label for="capacidad">Capacidad</label>
                <input required type="text" class="form-control capital"  id="capacidad" name="capacidad"
                    value="{{$vehiculo->capacidad}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
<a href="{{ route('vehiculos.index')}}" class="btn btn-primary">Regresar</a>
@endsection