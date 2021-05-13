@extends('layouts.app')
@section('content')

    @foreach ($categorias as $cateogria)

            <h2>Transmision: {{$cateogria->transmision}}</h2>
            <h2>Carrocería: {{$cateogria->carroceria}}</h2>
            <h2>Combustible:  {{$cateogria->combustible}}</h2>
            <h2>Acabados: {{$cateogria->acabados}}</h2>

        @endforeach
@endsection