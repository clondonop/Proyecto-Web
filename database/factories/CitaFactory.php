<?php

namespace Database\Factories;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { $modalidad = [1 => "Presencial", 2 => "Virtual"];
        $marca = [1 => "Kia", 2 => "Toyota", 3 => "Chevrolet", 4 => "Nissan", 5 => "Honda", 6 => "Jeep", 7 => "Audi"];
        return [
            'modalidad' => $modalidad[$this->faker->numberBetween(1,2)],
            'fecha' => $this->faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
            'hora' => $this->faker-> time('H:i', rand(28800,57400)),
            'interes'=> $marca[$this->faker->numberBetween(1,7)],
            'idVendedor' => $this->faker->numberBetween(1,15),
            'idCliente' => $this->faker->numberBetween(1,25)
        ];
    }
}
