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
        $marca = [1 => "Kia", 2 => "Toyota", 3 => "Chevrolet", 4 => "Nissan", 5 => "Honda", 6 => "Jeep", 7 => "Audi"];
        $color = [1 => "Blanco", 2 => "Negro", 3 => "Gris", 4 => "Rojo", 5 => "Azul", 6 => "Plata", 7 => "Café"];
        return [
            'placa'=> $this->faker->vehicleRegistration(),
            'marca'=> $marca[$this->faker->numberBetween(1,7)],
            'modelo'=> $this->faker->biasedNumberBetween(2010,2022, 'sqrt'),
            'color'=> $color[$this->faker->numberBetween(1,7)],
            'precio'=>$this->faker->numberBetween(35000000,70000000),
            'disponible'=> $this->faker->boolean($chanceOfGettingTrue = 95) ,
            'foto'=> $this->faker->randomElement(['f1.png', 'f2.png', 'f3.png', 'f4.png']),
            'idCategoria'=> $this->faker->numberBetween(1,6)
            
        ];
    }
}
