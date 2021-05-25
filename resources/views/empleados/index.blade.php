@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row m-1">
        <div class="col-md-10">
            <h1>Empleados</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('empleados.create')}}" class="btn btn-danger boton m-1">Registrarse como empleado</a>
        </div>
    </div>

<div class="row m-1">
    @foreach ($empleados as $empleado)
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card m-1" style="width: 18rem;">
            <img src="images/{{$empleado->avatar}}" alt="">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{$empleado->name}} {{$empleado->lastName}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Cargo: {{$empleado->cargo}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Área: {{$empleado->area}}</h6>
                @if(auth()->user()->id == $empleado->id)
                <form action="{{route('empleados.destroy',$empleado->id)}}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="vshow"><img src={{asset('images/eliminar.png')}}
                            alt="Eliminar"></button>
                </form>
                <a href="{{ route('empleados.edit',$empleado->id)}}" class="vshow "><img
                        src={{asset('images/pencil.png')}} alt="Editar"></a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
<a href="{{ route('home')}}" class="rojo d-flex justify-content-end m-2">Regresar</a>
</div>

@endsection