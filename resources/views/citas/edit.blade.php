@extends('layouts.app')
@section('content')
<div class="container py-3">
    <form action="{{route('citas.update',$cita->id)}}" method='post'>
        @csrf
        @method('PATCH')
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="modalidad">Modalidad</label>
                <select id="modalidad" class="form-control" name="modalidad">
                    <option selected>Seleccione</option>
                    <option>Presencial</option>
                    <option>Virtual</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="fecha">Fecha</label>
                <input required type="text" class="form-control capital" id="datepicker" name="fecha"
                    value="{{$cita->fecha}}">
            </div>
            <div class="form-group col-md-4">
                <label for="hora">Hora</label>
                <input required type="text" class="form-control capital" id="timepicker" name="hora"
                    value="{{$cita->hora}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="idVendedor">Vendedor</label>
                <select id="idVendedor" class="form-control" name="idVendedor">
                    @foreach ($users as $user)
                    <option value='{{$user->id}}'> {{$user->name}} {{$user->lastName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
<a href="{{ route('citas.index')}}" class="btn btn-primary">Regresar</a>
@endsection