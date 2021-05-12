<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vehiculos.index',['vehiculos'=>Vehiculo::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vehiculo::create([
            'placa'=> $request->placa,
            'numDocumento'=> $request->numDocumento,//Relacion con tabla propietario
            'marca'=> $request->marca,
            'linea'=> $request->linea,
            'modelo'=> $request->modelo,
            'cc'=> $request->cc,
            'color'=> $request->color,
            'servicio'=> $request->servicio,
            'clase'=> $request->clase,
            'carroceria'=> $request->carroceria,
            'combustible'=> $request->combustible,
            'capacidad'=> $request->capacidad
        ]);
        
        return redirect()->route('vehiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        $categoria = $vehiculo->categoria;
        return view('vehiculos.show',['vehiculo'=>$vehiculo,'categoria'=>$categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit',['vehiculo'=>$vehiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->all());
        return view('vehiculos.show',['vehiculo'=>$vehiculo]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete(); 

        return redirect()->route('vehiculos.index');
    }
}
