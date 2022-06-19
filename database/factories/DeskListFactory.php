<?php

namespace Database\Factories;

use App\Models\Desk;
use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeskList>
 */
class DeskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'desk_id' => Desk::all()->random()->id,
            'name' => $this->faker->name(),
        ];
    }
}
