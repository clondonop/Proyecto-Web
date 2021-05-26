@extends('layouts.app')

@section('content')
<div class="container menu ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="row m-1 d-flex justify-content-center">
                <img src="{{asset('images/calendar.png')}}" alt="">
            </div>
            <div class="row d-flex justify-content-center">
                <a href="{{ route('citas.create')}}" class="btn btn-danger boton boton m-1">Agendar cita</a>
                <a href="{{ route('citas.index')}}" class="btn btn-danger boton boton m-1">Ver citas</a>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="row m-1 d-flex justify-content-center">
                <img src="{{asset('images/car.png')}}" alt="">
            </div>
            <div class="row d-flex justify-content-center">
                <a href="{{ route('vehiculos.create')}}" class="btn btn-danger boton boton m-1">Registrar vehículo</a>
                <a href="{{ route('vehiculos.index')}}" class="btn btn-danger boton boton m-1">Ver vehículos</a>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="row m-1 d-flex justify-content-center">
                <img src="{{asset('images/participant.png')}}" alt="">
            </div>
            <div class="row d-flex justify-content-center">
                @if(auth()->user()->id == $empleado->id)
                <a href="{{ route('empleados.create')}}" class="btn btn-danger boton boton m-1">Agregar empleado</a>
                @endif
                <a href="{{ route('empleados.index')}}" class="btn btn-danger boton  m-1">Ver empleados</a>
            </div>
        </div>
    </div>

</div>

</div>
@endsection