<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perjalanan>
 */
class PerjalananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_user' => $this->faker->numberbetween(1, 2),
            'lokasi' => $this->faker->city(),
            'jam' => $this->faker->time(),
            'suhu' => $this->faker->randomFloat(1, 35, 37),
            'tanggal' => $this->faker->date(),
        ];
    }
}
