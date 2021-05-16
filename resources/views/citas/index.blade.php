@extends('layouts.app')
@section('content')

@foreach ($citas as $cita)

<h2 class="capital">Fecha:<a class="mayus" href="{{route('citas.show',$cita->id)}}"> {{$cita->fecha}}</a></h2>

@endforeach
<a href="{{ route('citas.create')}}" class="btn btn-primary">Registrar cita</a>
<a href="{{ route('citas.index')}}" class="btn btn-primary">Regresar</a>
@endsection