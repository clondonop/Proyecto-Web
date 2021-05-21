@extends('layouts.app')
@section('content')
<div class="container py-3">
    <form action="{{route('empleados.update',$empleado->id)}}" method='post'>
        @csrf
        @method('PATCH')
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cargo">Cargo</label>
                <input required type="text" class="form-control mayus" id="cargo" name="cargo"  value="{{$empleado->cargo}}">
            </div>
            <div class="form-group col-md-4">
                <label for="area">Area</label>
                <input required type="text" class="form-control capital" id="area" name="area"  value="{{$empleado->area}}">
            </div>
            <div class="form-group col-md-4">
                <label for="residencia">Residencia</label>
                <input required type="text" class="form-control capital" id="residencia" name="residencia"  value="{{$empleado->residencia}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
<a href="{{ route('empleados.index')}}" class="btn btn-primary">Regresar</a>
@endsection