<?php

namespace Database\Factories;

use App\Enum\GenderEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genders = [];
        foreach (GenderEnum::cases() as $gender) {
            array_push($genders, $gender->value);
        }
        return [
            'name' => fake()->name(),
            'first_release_year' => fake()->numberBetween($min = 1700, $max = intval(now()->year)),
            'dob' => fake()->date(),
            'address' => fake()->address,
            'gender' => fake()->randomElement($genders)
        ];
    }
}
