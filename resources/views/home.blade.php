@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="row m-1 d-flex justify-content-center">
                <img src="{{asset('images/calendar.png')}}" alt="">
            </div>
            <div class="row d-flex justify-content-center">
                <a href="{{ route('citas.create')}}" class="btn btn-danger boton boton">Agendar cita</a>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="row m-1 d-flex justify-content-center">
                <img src="{{asset('images/car.png')}}" alt="">
            </div>
            <div class="row d-flex justify-content-center">
                <a href="{{ route('vehiculos.create')}}" class="btn btn-danger boton boton">Registrar vehículo</a>
            </div>
        </div>
        
        <div class="col-md-4 ">
            <div class="row m-1 d-flex justify-content-center">
                <img src="{{asset('images/participant.png')}}" alt="">
            </div>
            <div class="row d-flex justify-content-center">
                <a href="{{ route('empleados.create')}}" class="btn btn-danger boton boton">Agregar empleado</a>
            </div>
        </div>
    </div>
    
</div>

</div>
@endsection