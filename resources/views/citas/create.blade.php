@extends('layouts.app')
@section('content')
<div class="container py-3">
    <form action="{{route('citas.store')}}" method='post'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="modalidad">Modalidad</label>
                <select id="modalidad" class="form-control" name="modalidad">
                    <option selected>Seleccione...</option>
                    <option>Presencial</option>
                    <option>Virtual</option>
                </select>
                <div class="form-group col-md-4">
                    <label for="fecha">Marca</label>
                    <input required type="text" class="form-control capital" id="datepicker" name="fecha">
                </div>
                <div class="form-group col-md-4">
                    <label for="hora">Hora</label>
                    <input required type="text" class="form-control capital" id="timepicker" name="hora">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="idVendedor">Vendedor</label>
                    <input required type="text" class="form-control capital" id="vendedor" name="idVendedor">
                </div>
                <div class="form-group col-md-4">
                    <label for="idCliente">Cliente</label>
                    <select id="idCliente" class="form-control" name="idCliente">
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<a href="{{ route('vehiculos.index')}}" class="btn btn-primary">Regresar</a>
@endsection