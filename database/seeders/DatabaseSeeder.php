<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(9)->create();
        \App\Models\Categoria::factory(6)->create();
        \App\Models\Cliente::factory(25)->create();
        \App\Models\Cita::factory(10)->create();
        \App\Models\Vehiculo::factory(10)->create();
        \App\Models\Empleado::factory(9)->create();
        
    }
}
