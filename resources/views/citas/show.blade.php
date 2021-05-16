@extends('layouts.app')
@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col-md-4">
            <h3 for="modalidad">Modalidad</h3>
            <p class="mayus">{{$cita->modalidad}}</p>
        </div>
        <div class="col-md-4">
            <h3 for="fecha">Fecha</h3>
            <p class="capital">{{$cita->fecha}}</p>
        </div>
        <div class="col-md-4">
            <h3 for="hora">Hora</h3>
            <p>{{$cita->hora}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 for="idVendedor">Vendedor</h3>
            <p class="capital">{{$user->name}} {{$user->lastName}}</p>
        </div>
        <div class="col-md-4">
            <h3 for="idCliente">Cliente</h3>
            <p class="capital">{{$cliente->nombre}} {{$cliente->apellido}}</p>

        </div>
    </div>
    <a href="{{ route('citas.index')}}" class="btn btn-primary">Regresar</a>
    <a href="{{ route('citas.edit',$cita->id)}}" class="btn btn-primary">Editar</a>
    <form action="{{route('citas.destroy',$cita->id)}}" method='POST'>

        @csrf

        @method('DELETE')



        <button type="submit" class="btn btn-primary">Eliminar </button>

    </form>
    @endsection