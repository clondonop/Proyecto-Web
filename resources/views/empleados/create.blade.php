@extends('layouts.app')
@section('content')
<div class="container py-3">
    <form action="{{route('empleados.store')}}" method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="cargo">Cargo</label>
                <select required id="cargo" class="form-control @error('cargo') is-invalid @enderror" name="cargo">
                    <option selected value="">Seleccione</option>
                    <option value="Asesor">Asesor</option>
                    <option value="Gerente">Gerente</option>
                </select>
                @error("cargo")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="area">Área</label>
                <select id="area" class="form-control @error('area') is-invalid @enderror" name="area">
                    <option selected value="">Seleccione</option>
                    <option value="Ventas">Ventas</option>
                    <option value="Administracion">Administración</option>
                </select>
                @error("area")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="residencia">Residencia</label>
                <input required type="text" class="form-control @error('residencia') is-invalid @enderror capital"
                    id="residencia" name="residencia" placeholder="Dirección completa">
                @error("residencia")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form row">
            <div class="form-group col-md-12">
                <label for="">Fotografía personal (Retrato)</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input form-control @error('avatar') is-invalid @enderror"
                        name="avatar" id="avatar" lang="es">
                    <label class="custom-file-label" for="avatar"></label>
                </div>
                @error("avatar")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="idUsuario">Empleado</label>
                <select id="idUsuario" class="form-control @error('idUsuario') is-invalid @enderror" name="idUsuario">
                    <option value="">Seleccione...</option>
                    @foreach ($users as $user)
                    <option value='{{$user->id}}'> {{$user->name}} {{$user->lastName}}</option>
                    @endforeach
                </select>
                @error("idUsuario")
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-danger btn-lg boton ">Registrar</button>
        </div>
    </form>
    <a href="{{ route('empleados.index')}}" class="rojo d-flex justify-content-end ">Regresar</a>
</div>

@endsection