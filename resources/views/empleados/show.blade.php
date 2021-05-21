@extends('layouts.app')
@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col-md-4">
            <h3 for="idVendedor">Nombre Completo</h3>
            <p class="capital">{{$user->name}} {{$user->lastName}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 for="cargo">Cargo</h3>
            <p class="mayus">{{$empleado->cargo}}</p>
        </div>
        <div class="col-md-4">
            <h3 for="area">Area</h3>
            <p class="capital">{{$empleado->area}}</p>
        </div>
        <div class="col-md-4">
            <h3 for="residencia">Residencia</h3>
            <p>{{$empleado->residencia}}</p>
        </div>
    </div>

</div>
<a href="{{ route('empleados.index')}}" class="btn btn-primary">Regresar</a>
<a href="{{ route('empleados.edit',$empleado->id)}}" class="btn btn-primary">Editar</a>
<form action="{{route('empleados.destroy',$empleado->id)}}" method='POST'>

    @csrf

    @method('DELETE')



    <button type="submit" class="btn btn-primary">Eliminar </button>

</form>
@endsection