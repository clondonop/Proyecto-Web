@extends('layouts.app')
@section('content')

    @foreach ($citas as $cita)
    
            <h2 class="capital">Marca  {{$vehiculo->marca}}</h2>
            <h2 class="capital">Modelo  {{$vehiculo->modelo}}</h2>

        @endforeach
@endsection