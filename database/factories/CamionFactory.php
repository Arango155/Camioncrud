<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CamionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [

            'placa_camion'=> $this->faker->name,
            'marca'=> $this->faker->name,
            'color'=> $this->faker->name,
            'modelo'=> $this->faker->name,
            'capacidad_toneladas'=> $this->faker->name,
            'id_transporte'=> $this->faker->name,

        ];
    }
}
