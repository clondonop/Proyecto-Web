@extends('layouts.app')
@section('content')
<div class="container py-3 align-middle">
    <h1>Registrar Vehículo</h1>
    <form action="{{route('vehiculos.store')}}" method='post' class="m-3 p-3" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="placa">Placa</label>
                <input required type="text" class="form-control @error('placa') is-invalid @enderror mayus" id="placa"
                    name="placa" oninput="this.value = this.value.toUpperCase()">
                @error("placa")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="marca">Marca</label>
                <input required type="text" class="form-control @error('marca') is-invalid @enderror capital" id="marca"
                    name="marca">
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
                <input required type="number" class="form-control @error('modelo') is-invalid @enderror capital"
                    id="modelo" name="modelo">
                @error('modelo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <input required type="text" class="form-control @error('color') is-invalid @enderror capital" id="color"
                    name="color">
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
                <select id="disponible" class="form-control @error('disponible') is-invalid @enderror"
                    name="disponible">
                    <option selected value="">Seleccione</option>
                    <option value='1'>Disponible</option>
                    <option value='0'>Vendido</option>
                </select>
                @error('disponible')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="idCategoria">Categoría</label>
                <select id="idCategoria" class="form-control @error('idCategoria') is-invalid @enderror"
                    name="idCategoria">
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
            <div class="form-group col-md-6">
                <label for="precio">Precio</label>
                <input type="number" class="form-control @error('idCategoria') is-invalid @enderror capital" id="precio"
                    name="precio">
                @error('precio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="foto">Fotografía</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('foto') is-invalid @enderror" name="foto"
                        id="foto" lang="es">
                    <label class="custom-file-label" for="foto"></label>
                    @error('foto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-danger btn-lg boton ">Registrar</button>
        </div>
    </form>
    <a href="{{ route('vehiculos.index')}}" class="rojo d-flex justify-content-end">Regresar</a>
</div>


@endsection