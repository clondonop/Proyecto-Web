@extends('layouts.app')
@section('content')
<div class="container py-3">
    <form action="{{route('vehiculos.update',$vehiculo->id)}}" method='post'>
        @csrf
        @method('PATCH')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="placa">Placa</label>
                <input required type="text" class="form-control @error('placa') is-invalid @enderror mayus" id="placa" name="placa"
                    oninput="this.value = this.value.toUpperCase()" value="{{$vehiculo->placa}}">
                @error("placa")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="marca">Marca</label>
                <input required type="text" class="form-control @error('marca') is-invalid @enderror capital" id="marca" name="marca">
                @error('marca')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="modelo">Modelo</label>
                <input required type="number" class="form-control @error('modelo') is-invalid @enderror capital" id="modelo" name="modelo">
                @error('modelo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <input required type="text" class="form-control @error('color') is-invalid @enderror capital" id="color" name="color">
                @error('color')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="disponible">Disponibilidad</label>
                <select id="disponible" class="form-control @error('disponible') is-invalid @enderror" name="disponible">
                    <option selected value="">Seleccione</option>
                    <option value="true">Disponible</option>
                    <option value="false">Vendido</option>
                </select>
                @error('disponible')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="idCategoria">Categoria</label>
                <select id="idCategoria" class="form-control @error('idCategoria') is-invalid @enderror" name="idCategoria">
                    <option selected value="">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                @error('idCategoria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="precio">Precio</label>
                <input type="number" class="form-control capital" id="precio" name="precio">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-danger btn-lg boton ">Registrar</button>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="placa">Placa</label>
                <input required type="text" class="form-control mayus" id="placa" name="placa"
                    >
            </div>
            <div class="form-group col-md-4">
                <label for="marca">Marca</label>
                <input required type="text" class="form-control capital" id="marca" name="marca"
                    value="{{$vehiculo->marca}}">
            </div>
            <div class="form-group col-md-4">
                <label for="modelo">Modelo</label>
                <input required type="text" class="form-control capital" id="modelo" name="modelo"
                    value="{{$vehiculo->modelo}}">
            </div>
            <div class="form-group col-md-4">
                <label for="disponibilidad">Disponibilidad</label>
                <select id="disponibilidad" class="form-control" name="disponibilidad">
                    <option >Seleccione...</option>
                    <option value='true'>Disponible</option>
                    <option value='false'>Vendido</option>
                </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="color">Color</label>
                <input required type="text" class="form-control capital" id="color" name="color"
                    value="{{$vehiculo->color}}">
            </div>
            <div class="form-group col-md-4">
                <label for="idCategoria">Categoria</label>
                <select id="idCategoria" class="form-control" name="idCategoria">
                    <option selected>Seleccione</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-danger boton">Actualizar</button>
    </form>
</div>
<a href="{{ route('vehiculos.index')}}" class="btn btn-danger boton">Regresar</a>
@endsection