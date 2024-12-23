<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medication>
 */
class MedicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "type" => fake()->randomElement(["Anti-Viral","Anti-Bacterial", "AntiBiotics", "Vaccines", "Anti-Fungal", "" ]),
            "active" => fake()->realText(30),
            "indication" =>fake()->randomElement(["Headache","Fever", "Stomach Ache", "Rashes", "Cough", "Cold" ]),
            "manufacturer"=>fake()->streetAddress(),
            "side"=>fake()->realText(30),
            "user-name" =>fake()->name(),
            "username" => fake()->name(),
            "image"=>fake()->randomElement(['/man.png','/illustration-editor-desktop.svg','/illustration-editor-mobile.svg']),
        ];
    }
}
