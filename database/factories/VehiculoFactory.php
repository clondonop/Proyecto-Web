<?php

namespace Database\Factories;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehiculo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {  
        return [
            'placa'=> $this->faker->vehicleRegistration(),
            'marca'=> $this->faker->vehicleBrand(),
            'modelo'=> $this->faker->biasedNumberBetween(2010,2022, 'sqrt'),
            'color'=> $this->faker->colorName(),
            'idCategoria'=> $this->faker->numberBetween(1,3)
            
        ];
    }
}
