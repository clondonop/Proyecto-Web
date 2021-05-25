<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $empleados = DB::select('select users.name,users.lastName,empleados.cargo,empleados.area,empleados.avatar from empleados inner join users on users.id=empleados.idUsuario'); 
      $vehiculos= DB::select('select marca,modelo,color,foto from vehiculos where disponible = 1');
      // dd($vehiculos);
         return view('welcome',['empleados'=>$empleados,'vehiculos'=>$vehiculos]);
    }
}