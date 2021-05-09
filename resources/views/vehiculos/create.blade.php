@extends('layouts.main')
@section('content')
<div class="container py-3">
    <form action="{{route('vehiculos.store')}}" method='post'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="placa">Placa</label>
                <input required type="text" class="form-control mayus" id="placa" name="placa"
                    oninput="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group col-md-4">
                <label for="numDocumento">Número de documento del propietario</label>
                <input required type="text" class="form-control capital" id="numDocumento" name="numDocumento">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="marca">Marca</label>
                <input required type="text" class="form-control capital" id="marca" name="marca">
            </div>
            <div class="form-group col-md-3">
                <label for="linea">Linea</label>
                <input required type="text" class="form-control capital" id="linea" name="linea">
            </div>
            <div class="form-group col-md-3">
                <label for="modelo">Modelo</label>
                <input required type="text" class="form-control capital" id="modelo" name="modelo">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="c">Cilindraje</label>
                <input required type="text" class="form-control capital" id="cc" name="cc">
            </div>
            <div class="form-group col-md-4">
                <label for="color">Color</label>
                <input required type="text" class="form-control capital" id="color" name="color">
            </div>
            <div class="form-group col-md-4">
                <label for="servicio">Servicio</label>
                <input required type="text" class="form-control capital" id="servicio" name="servicio">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="clase">Clase de vehículo</label>
                <input required type="text" class="form-control capital" id="clase" name="clase">
            </div>
            <div class="form-group col-md-3">
                <label for="carroceria">Tipo Carrocería</label>
                <input required type="text" class="form-control capital" id="carroceria" name="carroceria">
            </div>
            <div class="form-group col-md-3">
                <label for="combustible">Combustible</label>
                <input required type="text" class="form-control capital" id="combustible" name="combustible">
            </div>
            <div class="form-group col-md-3">
                <label for="capacidad">Capacidad</label>
                <input required type="text" class="form-control capital" id="capacidad" name="capacidad">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<a href="{{ route('vehiculos.index')}}" class="btn btn-primary">Regresar</a>
@endsection