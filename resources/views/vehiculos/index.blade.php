@extends('layouts.main')
@section('content')
<a href="{{ route('vehiculos.create')}}" class="btn btn-primary">Registrar terapia</a>  

   

    @foreach ($vehiculos as $vehiculo)

            <h1>Nombre de la terapia: {{$vehiculo->propietario}}</h1>



        @endforeach
@endsection