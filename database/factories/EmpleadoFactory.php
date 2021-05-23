<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cargo = [1 => "Gerente", 2 => "Asesor"];
        $area = [1 => "Administracion", 2 => "Ventas"];
        return [
            'cargo'=> $cargo[$this->faker->biasedNumberBetween(1,2, 'sqrt')],
            'avatar'=> $this->faker->unique()->randomElement(['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png']),
            'area'=> $area[$this->faker->biasedNumberBetween(1,2, 'sqrt')],
            'residencia'=> $this->faker->streetAddress(),
            'idUsuario' => $this->faker->unique()->numberBetween(1,15)
            
        ];
    }
}
