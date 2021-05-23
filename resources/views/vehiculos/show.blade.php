@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-md-flex flex-md-equal w-100 d-flex justify-content-center">
        <div class="bg-dark mr-md-3 pt-1 px-3 pt-md-4 px-md-5 text-center text-white overflow-hidden caja">
            <form action="{{route('vehiculos.destroy',$vehiculo->id)}}" method='POST'>
                @csrf
                @method('DELETE')
                <button type="submit" class="vshow"><img src={{asset('images/eliminar.png')}} alt="Eliminar"></button>
            </form>
            <a href="{{ route('vehiculos.edit',$vehiculo->id)}}" class="vshow "><img src={{asset('images/pencil.png')}}
                    alt="Editar"></a>
            <div class="my-1 py-1">
                <h2 class="display-5">Placa: {{$vehiculo->placa}}</h2>
                <p class="capital">{{$vehiculo->marca}} {{$vehiculo->color}} {{$vehiculo->modelo}} </p>
                <p class="capital"></p>
                <p> Tipo de Categoría: {{$vehiculo->idCategoria}}</p>
                <div>
                    <div class="row">
                        <div class="col-md-6">Transmisión: {{$categoria->transmision}} </div>
                        <div class="col-md-6">Carrocería: {{$categoria->carroceria}} </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Combustible: {{$categoria->combustible}}</div>
                        <div class="col-md-6">Acabados: {{$categoria->acabados}}</div>
                    </div>
                </div>

            </div>
            <div class="bg-light shadow-sm mx-auto p-1 caja-foto overflow-hidden">
                <img src='../images/{{$vehiculo->foto}}' class="img-fluid foto">
            </div>
        </div>
        
    </div>
    <a href="{{ route('vehiculos.index')}}" class="rojo d-flex justify-content-end">Regresar</a>
</div>
@endsection