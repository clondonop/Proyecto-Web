<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class vhAPI extends Controller
{
    function getData(){
        $vehiculos= DB::select('select placa,marca,modelo,color,precio from vehiculos where disponible = 1');
    return $vehiculos;
    }

}
