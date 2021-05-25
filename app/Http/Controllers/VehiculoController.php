<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $request->validate([
            'placa' => 'required|unique:vehiculos',
            'marca' => 'required',
            'modelo' =>'required',
            'color' => 'required',
            'precio' =>'required',
            'disponible' => 'required',
            'idCategoria' => 'required',
            'foto' => 'required|mimes:jpg,jped,png',
        ]);
        if($request->hasFile('foto')){
            $file=$request->file('foto');
            $name= time().$file->getClientOriginalName();
            $file->move(public_path().'/images/' ,$name);
            }
            Vehiculo::create([
                'placa' => $request->placa,
                'marca' => $request->marca,
                'modelo' =>$request->modelo,
                'color' => $request->color,
                'precio' =>$request->precio,
                'disponible' => $request->disponible,
                'idCategoria' =>$request->idCategoria,
                'foto' => $name,
                
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
        $categoria = $vehiculo->categoria;
        return view('vehiculos.edit',['vehiculo'=>$vehiculo,'categoria'=>$categoria]);
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
        $categoria = $vehiculo->categoria;
        $request->validate([
            'placa' => 'required|unique:vehiculos'.',id',
            'marca' => 'required',
            'modelo' =>'required',
            'color' => 'required',
            'precio' =>'required',
            'disponible' => 'required',
            'idCategoria' => 'required'
        ]);
        $vehiculo->update($request->all());
        return view('vehiculos.show',['vehiculo'=>$vehiculo,'categoria'=>$categoria]);
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