@extends('layouts.main')
@section('content')

    @foreach ($clientes as $cliente)

            <h1>Nombre: {{$cliente->nombre}}</h1>
            <h2>Apellido {{$cliente->apellido}}</h2>
            <h2>Telefono  {{$cliente->telefono}}</h2>
            <h2>Correo {{$cliente->correo}}</h2>

        @endforeach
@endsection