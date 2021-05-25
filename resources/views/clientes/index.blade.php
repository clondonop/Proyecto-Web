@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Listado de Clientes</h1>
    <table class="table table-striped  table-borderless table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <th scope="row">{{$cliente->id}}</a></th>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->correo}}</td>
                <td>{{$cliente->telefono}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('home')}}" class="rojo d-flex justify-content-end m-2">Regresar</a>
</div>
@endsection