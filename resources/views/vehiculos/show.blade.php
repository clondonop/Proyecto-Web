@extends('layouts.main')
@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col-md-4">
            <h3 for="placa">Placa</h3>
            <p class="mayus">{{$vehiculo->placa}}</p>
        </div>
        <div class="col-md-4">
            <h3 for="marca">Marca</h3>
            <p>{{$vehiculo->marca}}</p>
        </div>
        <div class="col-md-4">
            <h3 for="modelo">Modelo</h3>
            <p>{{$vehiculo->modelo}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 for="color">Color</h3>
            <p>{{$vehiculo->color}}</p>
        </div>
        <div class="col-md-4">
            <h3 for="color">Categoria</h3>
            <p>{{$vehiculo->idCategoria}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h3 for="clase">Clase de vehículo</h3>
            <p>{{$categoria->clase}}</p>
        </div>
        <div class="col-md-3">
            <h3 for="carroceria">Tipo Carrocería</h3>
            <p>{{$categoria->carroceria}}</p>
        </div>
        <div class="col-md-3">
            <h3 for="combustible">Combustible</h3>
            <p>{{$categoria->combustible}}</p>
        </div>
    </div>
</div>
<a href="{{ route('vehiculos.index')}}" class="btn btn-primary">Regresar</a>
<a href="{{ route('vehiculos.edit',$vehiculo->id)}}" class="btn btn-primary">Editar</a>
<form action="{{route('vehiculos.destroy',$vehiculo->id)}}" method='POST'>

    @csrf

    @method('DELETE')



    <button type="submit" class="btn btn-primary">Eliminar </button>

</form>
@endsection