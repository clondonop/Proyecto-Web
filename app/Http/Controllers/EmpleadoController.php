<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $empleados = DB::select('select users.name,users.lastName,empleados.id,empleados.cargo,empleados.area,empleados.avatar from empleados inner join users on users.id=empleados.idUsuario'); 
         return view('empleados.index',['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::select('select id,name,lastName from users');
        return view('empleados.create',['users'=>$users]);
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
            'cargo' => 'required',
            'area' => 'required',
            'residencia' =>'required',
            'avatar' => 'required',
            'idUsuario' =>'required|unique:empleados',
        ]);

        if($request->hasFile('avatar')){
        $file=$request->file('avatar');
        $name= time().$file->getClientOriginalName();
        $file->move(public_path().'/images/' ,$name);
        }
        Empleado::create([
            'cargo'=> $request->cargo,
            'area'=> $request->area,
            'residencia'=> $request->residencia,
            'avatar'=> $name,
            'idUsuario'=>$request->idUsuario,
        ]);
          return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        $user = $empleado->user;
        return view('empleados.show',['empleado'=>$empleado,'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $user = $empleado->user;
        return view('empleados.edit',['empleado'=>$empleado,'users'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $user = $empleado->user;
        $request->validate([
            'cargo' => 'required',
            'area' => 'required',
            'residencia' =>'required',
            'avatar' => 'required',
        ]);
        $empleado->update($request->all());
        return view('empleados.index',['empleado'=>$empleado,'users'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete(); 

        return redirect()->route('empleados.index');
    }
}