@extends('layouts.main')
@section('content')
<div class="container py-3">
       
       <div class="row">
       <div class="col-md-6">
               <h3 for="placa">Placa</h3>
               <p class="mayus">{{$vehiculo->placa}}</p>
           </div>
           <div class="col-md-6">
               <h3 for="numDocumento">Número de documento del propietario</h3>
               <p>{{$vehiculo->numDocumento}}</p>
           </div>

       </div>
       <div class="row">
           <div class="col-md-4">
               <h3 for="marca">Marca</h3>
               <p>{{$vehiculo->marca}}</p>
           </div>
           <div class="col-md-4">
               <h3 for="Linea">Linea</h3>
               <p>{{$vehiculo->linea}}</p>
           </div>
           <div class="col-md-4">
               <h3 for="modelo">Modelo</h3>
               <p>{{$vehiculo->modelo}}</p>
           </div>
       </div>

       <div class="row">
           <div class="col-md-4">
               <h3 for="c">Cilindraje</h3>
               <p>{{$vehiculo->cc}}</p>
           </div>
           <div class="col-md-4">
               <h3 for="color">Color</h3>
               <p>{{$vehiculo->color}}</p>
           </div>
           <div class="col-md-4">
               <h3 for="servicio">Servicio</h3>
               <p>{{$vehiculo->servicio}}</p>
           </div>
       </div>
       <div class="row">
           <div class="col-md-3">
               <h3 for="clase">Clase de vehículo</h3>
               <p>{{$vehiculo->clase}}</p>
           </div>
           <div class="col-md-3">
               <h3 for="carroceria">Tipo Carrocería</h3>
               <p>{{$vehiculo->carroceria}}</p>
           </div>
           <div class="col-md-3">
               <h3 for="combustible">Combustible</h3>
               <p>{{$vehiculo->combustible}}</p>
           </div>
           <div class="col-md-3">
               <h3 for="capacidad">Capacidad</h3>
               <p>{{$vehiculo->capacidad}}</p>
           </div>
       </div>
</div>
<a href="{{ route('vehiculos.index')}}" class="btn btn-primary">Regresar</a>  
<a href="{{ route('vehiculos.edit',$vehiculo->id)}}" class="btn btn-primary">Editar</a>  
@endsection