@extends('layouts.app')
@section('content')
<div class="container ">
    <h1>Pagina Principal</h1>
    <h1 id="vehiculos">Vehículos Disponibles</h1>
    <div class="row m-1">
        @foreach($vehiculos as $vehiculo)
        <div class="col-lg-4 col-md-6">
            <div class="card mb-3 vh">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/{{$vehiculo->foto}}" alt="..." class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> {{$vehiculo->marca}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Color: {{$vehiculo->color}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Modelo: {{$vehiculo->modelo}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h1 id="empleados">Nuestros Empleados</h1>
    <div class="row m-1">
        @foreach($empleados as $empleado)
        <div class="col-lg-3 col-md-4">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/{{$empleado->avatar}}" alt="..." class="img-fluid rounded-circle vh">
                </div>
                <div class="col-md-8">
                    <h5>{{$empleado->name}}  {{$empleado->lastName}}</h5>
                    <h6 class="mb-2 text-muted">  {{$empleado->cargo}}</h6>
                    <h6 class="mb-2 text-muted">  {{$empleado->area}}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection