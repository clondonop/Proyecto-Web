@extends('layouts.main')
@section('content')
<div class="container py-3">
        <form action="{{route('vehiculos.store')}}" method='post'>
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="propietario">Propietario</label>
                    <input required id="propietario" name="propietario" type="text" class="form-control"
                        placeholder="Apellido(s) y Nombre(s)">
                </div>
                <div class="form-group col-md-2">
                    <label for="tipo">Tipo de documento</label>
                    <select id="tipo" name="tipo" class="form-control">
                        <option selected>C.C.</option>
                        <option>T.I.</option>
                        <option>C.E.</option>
                        <option>P.A.</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="numDocumento">Número de documento</label>
                    <input required type="text" class="form-control" id="numDocumento" name="numDocumento">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="placa">Placa</label>
                    <input required type="text" class="form-control" id="placa" name="placa">
                </div>
                <div class="form-group col-md-3">
                    <label for="marca">Marca</label>
                    <input required type="text" class="form-control" id="marca" name="marca">
                </div>
                <div class="form-group col-md-3">
                    <label for="linea">Linea</label>
                    <input required type="text" class="form-control" id="linea" name="linea">
                </div>
                <div class="form-group col-md-3">
                    <label for="modelo">Modelo</label>
                    <input required type="text" class="form-control" id="modelo" name="modelo">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="c">Cilindraje</label>
                    <input required type="text" class="form-control" id="cc" name="cc">
                </div>
                <div class="form-group col-md-4">
                    <label for="color">Color</label>
                    <input required type="text" class="form-control" id="color" name="color">
                </div>
                <div class="form-group col-md-4">
                    <label for="servicio">Servicio</label>
                    <input required type="text" class="form-control" id="servicio" name="servicio">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="clase">Clase de vehículo</label>
                    <input required type="text" class="form-control" id="clase" name="clase">
                </div>
                <div class="form-group col-md-3">
                    <label for="carroceria">Tipo Carrocería</label>
                    <input required type="text" class="form-control" id="carroceria" name="carroceria">
                </div>
                <div class="form-group col-md-3">
                    <label for="combustible">Combustible</label>
                    <input required type="text" class="form-control" id="combustible" name="combustible">
                </div>
                <div class="form-group col-md-3">
                    <label for="capacidad">Capacidad</label>
                    <input required type="text" class="form-control" id="capacidad" name="capacidad">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection