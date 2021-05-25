@extends('layouts.app')
@section('content')
<div class="container py-3 align-middle">
    <h1>Registrar Citas</h1>
    <form action="{{route('citas.store')}}" method='post' class="m-3 p-3">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="modalidad">Modalidad</label>
                <select id="modalidad" class="form-control @error('idCategoria') is-invalid @enderror" name="modalidad">
                    <option selected value="">Seleccione</option>
                    <option value="Virtual">Virtual</option>
                    <option value="Presencial">Presencial</option>
                </select>
                @error("modalidad")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="fecha">Fecha</label>
                <input required type="text" class="form-control @error('fecha') is-invalid @enderror  capital" id="datepicker" name="fecha">
                @error("fecha")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="hora">Hora</label>
                <input required type="text" class="form-control capital" id="timepicker" name="hora">
            </div>
            <div class="form-group col-md-12">
                <label for="interes">Interés</label>
                <input required type="text" class="form-control @error('interes') is-invalid @enderror capital"
                    id="interes" name="interes">
                @error('interes')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="idVendedor">Asesor</label>
                <select id="idVendedor" class="form-control @error('idVendedor') is-invalid @enderror"
                    name="idVendedor">
                    <option selected value="">Seleccione</option>
                    @foreach($users as $user)
                    <option value='{{$user->id}}'>{{$user->name}} {{$user->lastName}}</option>
                    @endforeach
                </select>
                @error('idVendedor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="idCliente">Cliente</label>
                <select id="idCliente" class="form-control @error('idCliente') is-invalid @enderror" name="idCliente">
                    <option selected value="">Seleccione</option>
                    @foreach($clientes as $cliente)
                    <option value='{{$cliente->id}}'>{{$cliente->nombre}} {{$cliente->apellido}}</option>
                    @endforeach
                </select>
                @error('idCliente')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-danger btn-lg boton ">Registrar</button>
        </div>
    </form>
    <a href="{{ route('citas.index')}}" class="rojo d-flex justify-content-end">Regresar</a>
</div>
@endsection