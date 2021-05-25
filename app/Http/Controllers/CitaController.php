<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use DB;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('citas.index',['citas'=>Cita::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::select('select id,name,lastName from users');
        $clientes = DB::select('select id,nombre,apellido from clientes');
        return view('citas.create',['users'=>$users,'clientes'=>$clientes]);
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
            'modalidad' => 'required',
            'fecha' => 'required',
            'hora' =>'required',
            'interes' => 'required',
            'idVendedor' =>'required',
            'idCliente' =>'required',
        ]);
        
        Cita::create([
            'modalidad'=> $request->modalidad,
            'fecha'=> $request->fecha,
            'hora'=> $request->hora,
            'interes'=> $request->interes,
            'idVendedor'=> $request->idVendedor,
            'idCliente'=> $request->idCliente,
            
        ]);
        
        return redirect()->route('citas.index');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        $user = $cita->user;
        $cliente = $cita->cliente;
        return view('citas.show',['cita'=>$cita,'cliente'=>$cliente,'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        $users = DB::select('select id,name,lastName from users');
        $user = $cita->user;
        $cliente = $cita->cliente;
        
        return view('citas.edit',['cita'=>$cita,'cliente'=>$cliente,'user'=>$user,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        $user = $cita->user;
        $cliente = $cita->cliente;
        $request->validate([
            'modalidad' => 'required',
            'fecha' => 'required',
            'hora' =>'required',
            'interes' => 'required',
            'idVendedor' =>'required',
            'idUsuario' =>'required',
        ]);
        $cita->update($request->all());
        return view('citas.show',['cita'=>$cita,'cliente'=>$cliente,'user'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete(); 

        return redirect()->route('citas.index');
    }
}
