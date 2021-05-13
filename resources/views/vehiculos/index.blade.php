@extends('layouts.app')
@section('content')
<a href="{{ route('vehiculos.create')}}" class="btn btn-primary">Registrar vehiculo</a>  

   

    @foreach ($vehiculos as $vehiculo)

            <h1>Placa <a class="mayus" href="{{route('vehiculos.show',$vehiculo->id)}}"> {{$vehiculo->placa}}</a></h1>
            <h2 class="capital">Marca  {{$vehiculo->marca}}</h2>
            <h2 class="capital">Modelo  {{$vehiculo->modelo}}</h2>

        @endforeach
@endsection