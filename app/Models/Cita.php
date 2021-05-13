<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function cliente(){
        return $this->belongsTo(Cliente::class,'idCliente');
    }
    public function vendedor(){
        return $this->belongsTo(User::class,'idVendedor');
    }
}
