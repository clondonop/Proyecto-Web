@extends('layouts.app')
@section('content')
<div class="container py-3">
    <form action="{{route('empleados.store')}}" method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cargo">Cargo</label>
                <select id="cargo" class="form-control" name="cargo">
                    <option selected>Seleccione</option>
                    <option>Asesor</option>
                    <option>Gerente</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="area">Area</label>
                <select id="area" class="form-control" name="are">
                    <option selected>Seleccione</option>
                    <option>Ventas</option>
                    <option>Administración</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="residencia">Residencia</label>
                <input required type="text" class="form-control capital" id="residencia" name="residencia" placeholder="Dirección completa">
            </div>
        </div>

        <div class="form row">
            <div class="form-group col-md-6">
                <label for="">Fotografía personal (Retrato)</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="avatar" id="avatar" lang="es">
                    <label class="custom-file-label" for="fto"></label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="idUsuario">Empleado</label>
                <select id="idUsuario" class="form-control" name="idUsuario">
                <option value="">Seleccione...</option>
                    @foreach ($users as $user)
                    <option value='{{$user->id}}'> {{$user->name}} {{$user->lastName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
</div>
<button type="submit" class="btn btn-danger boton">Registrar</button>
</form>

</div>
<a href="{{ route('empleados.index')}}" class="btn btn-danger boton">Regresar</a>
@endsection