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
            "url" => "https://www.google.com/maps/dir//1+Nwaeze+OjI+Cl,+GRA,+Enugu+400102,+Enugu/@6.4569195,7.418694,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x1044a3c04fdddb1d:0xd1b02423eb57db78!2m2!1d7.5010959!2d6.4569261?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D",
            "user-name" =>fake()->name(),
            "image"=>fake()->randomElement(['/man.png','/illustration-editor-desktop.svg','/illustration-editor-mobile.svg']),
        ];
    }
}
