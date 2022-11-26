<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['San Salvador', 'Managua', 'Tegucigalpa', 'San José', 'Ciudad de Panamá', 'Belmopan', 'Ciudad de Guatemala']),
            'country_id' => $this->faker->randomElement([1,2,3,4,5,6,7])
        ];
    }
}
