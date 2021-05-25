@extends('layouts.app')
@section('content')
<div class="container  py-3">
    <div class="row">
        <div class="col-md-6"><h1>Editar cita</h1>
        </div>
        <div class="col-md-3">
        <h5>Asesor actual: {{$user->name}} {{$user->lastName}}</h5>
        </div>
        <div class="col-md-3"><h5>Cliente: {{$cliente->nombre}} {{$cliente->apellido}}</h5>
        </div>
    </div>
    
    <form action="{{route('citas.update',$cita->id)}}" method='post'>
        @csrf
        @method('PATCH')
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="modalidad">Modalidad</label>
                <select id="modalidad" class="form-control" name="modalidad">
                    <option selected>Seleccione</option>
                    <option>Presencial</option>
                    <option>Virtual</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="fecha">Fecha</label>
                <input required type="text" class="form-control capital" id="datepicker" name="fecha"
                    value="{{$cita->fecha}}">
            </div>
            <div class="form-group col-md-12">
                <label for="hora">Hora</label>
                <input required type="text" class="form-control capital" id="timepicker" name="hora"
                    value="{{$cita->hora}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="idVendedor">Vendedor</label>
                <select id="idVendedor" class="form-control" name="idVendedor">
                    <option value="">Seleccione</option>
                    @foreach ($users as $user)
                    <option value={{$user->id}}> {{$user->name}} {{$user->lastName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-danger btn-lg boton ">Actualizar</button>
        </div>
    </form>
    <a href="{{ route('citas.index')}}" class="rojo d-flex justify-content-end">Regresar</a>
</div>

@endsection