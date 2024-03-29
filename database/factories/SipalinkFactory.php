<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sipalink>
 */
class SipalinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->text(),
            'link' => fake()->name(),
            'tags_id' => rand(1,7),
            'created_by' => rand(1,2),
            'hit_counter' => 0,
            'vpn' => fake()->boolean()
        ];
    }
}
