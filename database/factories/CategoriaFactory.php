<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categoria::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $acabados = [1 => "De Lujo", 2 => "Básico"];
        return [
            'transmision'=> $this->faker->vehicleGearBoxType(),
            'carroceria'=> $this->faker->vehicleType(),
            'combustible'=> $this->faker->vehicleFuelType(),
            'acabados'=> $acabados[$this->faker->numberBetween(1,2)]
        ];
    }
}
