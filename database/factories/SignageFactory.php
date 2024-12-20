<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Signage>
 */
class SignageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->realText(15),
            "shape" => fake() -> name(),
            "size" => "3 feet Diameter",
            "ImagePath" => fake() -> name(),
            "dojo_id" => Dojo::inRandomOrder()->first()->id,
        ];
    }
}
