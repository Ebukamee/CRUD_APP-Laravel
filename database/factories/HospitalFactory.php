<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->word(),
            "type" => fake()->randomElement(["Teaching Hospital","General Hospital", "Clinic", "Specialized Hospital", "Medical Centre", "Primary HealthCare Center" ]),
            "state" => fake()->state(),
            "city" =>fake()->city(),
            "address"=>fake()->streetAddress(),
            "proprietor"=>fake()->randomElement(['Mission','Private', 'State Government', 'Federal Government', 'Local Government','Charity']),
            "director"=>fake()->name(),
            "description"=>fake()->realText(200),
            "image"=>fake()->imageUrl(),
        ];
    }
}
