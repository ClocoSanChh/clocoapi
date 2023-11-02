<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enum\GenreEnum;
use App\Models\Artist;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genres = [];
        foreach (GenreEnum::cases() as $genre) {
            array_push($genres, $genre->value);
        }
        return [
            'title' => fake()->unique()->word(),
            'artist_id' => Artist::Factory(),
            'album_name' => fake()->word(),
            'genre' => fake()->randomElement($genres)
        ];
    }
}
