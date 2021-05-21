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
        $marca = [1 => "Kia", 2 => "Toyota", 3 => "Chevrolet", 4 => "Nissan", 5 => "Honda", 6 => "Jeep", 7 => "Audi"];
        return [
            'cargo'=> $this->faker->jobTitle(),
            'avatar'=> $this->faker->word(),
            'area'=> $this->faker->word(),
            'residencia'=> $this->faker->streetAddress(),
            'idUsuario' => $this->faker->numberBetween(1,15)
            
        ];
    }
}
