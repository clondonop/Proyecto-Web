@extends('layouts.app')
@section('content')
<div class="container py-3">
    <form action="{{route('empleados.store')}}" method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cargo">Cargo</label>
                <input required type="text" class="form-control mayus" id="cargo" name="cargo">
            </div>
            <div class="form-group col-md-4">
                <label for="area">Area</label>
                <input required type="text" class="form-control capital" id="area" name="area">
            </div>
            <div class="form-group col-md-4">
                <label for="residencia">Residencia</label>
                <input required type="text" class="form-control capital" id="residencia" name="residencia">
            </div>
        </div>

        <div class="form row">
            <div class="form-group col-md-6">
                <label for="">Fotografía personal (Retrato)</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="avatar" id="avatar" lang="es">
                    <label class="custom-file-label" for="fto">Seleccionar Archivo</label>
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
<button type="submit" class="btn btn-primary">Registrar</button>
</form>

</div>
<a href="{{ route('empleados.index')}}" class="btn btn-primary">Regresar</a>
@endsection