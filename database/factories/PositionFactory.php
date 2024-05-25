<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    //     $positions = ['kapitan', 'kagawad', 'tanod', 'personnel'];
    //     $kagawadPositions = ['centro kagawad', 'salvacion', 'upper lagayac', 'lower lagayac', 'cansuran', 'campinoon'];

    //     $posName = $this->faker->randomElement($positions);

    //     if ($posName === 'kapitan') {
    //         $existingKapitanCount = Position::where('pos_name', 'kapitan')->count();
    //         if ($existingKapitanCount > 0) {
    //             // If a kapitan already exists, change position to another type
    //             $posName = $this->faker->randomElement(array_diff($positions, ['kapitan']));
    //         }
    //     }

    //     if ($posName === 'kagawad') {
    //         $existingKagawadCount = Position::where('pos_name', 'kagawad')->count();
    //         if ($existingKagawadCount >= 6) {
    //             // If there are already six kagawad, change position to another type
    //             $posName = $this->faker->randomElement(array_diff($positions, ['kagawad']));
    //         }
    //     }

    //     if ($posName === 'kagawad') {
    //         // If the position is 'kagawad' and there are less than 6 kagawad, select from kagawadPositions
    //         $posDesignation = $this->faker->randomElement($kagawadPositions);
    //     } else {
    //         // For other positions, generate a random word
    //         $posDesignation = $this->faker->word;
    //     }

    //     return [
    //         'pos_name' => $posName,
    //         'pos_designation' => $posDesignation,
    //         'pos_enddate' => $this->faker->optional()->date(),
    //     ];
    }
}
