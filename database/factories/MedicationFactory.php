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
            "state" => fake()->state(),
            "city" =>fake()->city(),
            "address"=>fake()->streetAddress(),
            "proprietor"=>fake()->randomElement(['Mission','Private', 'State Government', 'Federal Government', 'Local Government','Charity']),
            "director"=>fake()->name(),
            "description"=>fake()->realText(200),
            "image"=>fake()->randomElement(['/man.png','/illustration-editor-desktop.svg','/illustration-editor-mobile.svg']),
        ];
        ];
    }
}
