@extends('layouts.app')
@section('content')

    @foreach ($citas as $cita)
    
            <h2 class="capital" >Fecha:<a class="mayus" href="{{route('citas.show',$cita->id)}}"> {{$cita->fecha}}</a></h2>

        @endforeach
@endsection