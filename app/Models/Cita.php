<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    public function cliente(){
        return $this->hasOne(Cliente::class);
    }
    public function vendedor(){
        return $this->hasOne(User::class);
    }
}
