<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangayOfficial>
 */
class BarangayOfficialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'position_id' => $this->faker->numberBetween(1,10),
            'age' => $this->faker->numberBetween(25, 60),
            'address' => $this->faker->address,
        ];
    }
}
