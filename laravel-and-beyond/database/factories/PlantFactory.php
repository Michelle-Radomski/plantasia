<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'nickname' => $this->faker->name(),
            'official_name' => $this->faker->name(),
            'toxic' => $this->faker->randomElement(['yes', 'no']),
            'light' => $this->faker->words(3, true),
            'temperature' => $this->faker->words(3, true),
            'humidity' => $this->faker->words(3, true),
            'water' => $this->faker->sentence(6),
            'plant_fertilizer' => $this->faker->sentence(6),
            'soil' => $this->faker->sentence(6),
            'misting' => $this->faker->words(3, true),
            'repot' => $this->faker->sentence(6),
            'air_purifying' => $this->faker->randomElement(['yes', 'no']),
        ];
    }
}
