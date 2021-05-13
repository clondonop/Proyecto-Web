@extends('layouts.app')
@section('content')
<div class="container py-3">
    <form action="{{route('vehiculos.store')}}" method='post'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="placa">Placa</label>
                <input required type="text" class="form-control mayus" id="placa" name="placa"
                    oninput="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group col-md-4">
                <label for="marca">Marca</label>
                <input required type="datepicker" class="form-control capital" id="marca" name="marca">
            </div>
            <div class="form-group col-md-4">
                <label for="modelo">Modelo</label>
                <input required type="text" class="form-control capital" id="modelo" name="modelo">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="color">Color</label>
                <input required type="text" class="form-control capital" id="color" name="color">
            </div>
            <div class="form-group col-md-4">
                <label for="idCategoria">Categoria</label>
                <select id="idCategoria" class="form-control" name="idCategoria">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>

</div>
<a href="{{ route('vehiculos.index')}}" class="btn btn-primary">Regresar</a>
@endsection