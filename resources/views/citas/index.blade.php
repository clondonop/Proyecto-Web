@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Agenda</h1>
        </div>
        <div class="col-md-2">
        <a href="{{ route('citas.create')}}" class="btn btn-danger boton">Registrar cita</a>
        </div>
    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Asesor</th>
                <th scope="col">Cliente</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
            <tr>
                <th scope="row"><a href="{{ route('citas.show',$cita->id)}}" class="rojo">{{$cita->id}}</a></th>
                <td>{{$cita->fecha}}</td>
                <td>{{$cita->idVendedor}}</td>
                <td>{{$cita->idCliente}}</td>
                <td>
                    <div class="d-flex justify-content-between"><a href="{{ route('citas.edit',$cita->id)}}"
                            class="vshow align-self-center"><img src={{asset('images/pencil.png')}} alt="Editar"></a>
                    </div>
                </td>
                <td>
                    <div class="d-flex justify-content-between">
                        <form action="{{route('citas.destroy',$cita->id)}}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="vshow"><img src={{asset('images/eliminar.png')}} alt="Eliminar"
                                    class="mx-auto"></button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
  
    <a href="{{ route('home')}}" class="rojo d-flex justify-content-end m-2">Regresar</a>
</div>
@endsection