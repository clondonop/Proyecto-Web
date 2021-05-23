@extends('layouts.app')
@section('content')

<a href="{{ route('empleados.create')}}" class="btn btn-danger boton">Register</a>
    @foreach ($empleados as $empleado)

            <h1>Cargo <a class="mayus" href="{{route('empleados.show',$empleado->id)}}"> {{$empleado->cargo}}</a></h1>
            <h2 class="capital">Area  {{$empleado->area}}</h2>
            <h2 class="capital">Residencia  {{$empleado->residencia}}</h2>
            <img  src="images/{{$empleado->avatar}}">
        @endforeach
@endsection