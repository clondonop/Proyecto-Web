@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <div class="col-md-10">
            <h1>Empleados</h1>
        </div>
        <div class="col-md-2">
        <a href="{{ route('vehiculos.create')}}" class="btn btn-danger boton m-1">Registrar vehiculo</a>
        </div>
    </div>
    <div class="row m-1">
        @foreach ($vehiculos as $vehiculo)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card m-1" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Placa: {{$vehiculo->placa}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Marca: {{$vehiculo->marca}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Modelo: {{$vehiculo->modelo}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Precio: ${{$vehiculo->precio}}</h6>
                    <a class="mayus rojo" href="{{route('vehiculos.show',$vehiculo->id)}}">Ver más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a href="{{ route('home')}}" class="rojo d-flex justify-content-end m-2">Regresar</a>
</div>
@endsection