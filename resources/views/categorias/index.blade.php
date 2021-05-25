@extends('layouts.app')
@section('content')
<div class="row m-1">
    @foreach ($categorias as $categoria)
    <div class="col-md-6">
        <div class="card m-1">
            <div class="card-header cat">
              Categoría:  {{$categoria->id}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item capital">Transmisión: {{$categoria->transmision}}</li>
                <li class="list-group-item capital">Carrocería: {{$categoria->carroceria}}</li>
                <li class="list-group-item capital">Combustible: {{$categoria->combustible}}</li>
                <li class="list-group-item">Acabados: {{$categoria->acabados}}</li>
            </ul>
        </div>
    </div>
    @endforeach
</div>
<a href="{{ route('home')}}" class="rojo d-flex justify-content-end m-2">Regresar</a>
@endsection