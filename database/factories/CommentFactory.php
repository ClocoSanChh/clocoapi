<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Song;
use App\Models\User;
use App\Models\Artist;
use App\Enum\CommentableEnum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $commentables = [];
        foreach (CommentableEnum::cases() as $commentable) {
            array_push($commentables, $commentable->value);
        }
        $commenter = fake()->randomElement($commentables);

        return [
            'song_id' => Song::factory(),
            'comment' => fake()->sentence(),
            'commentable_id' => $commenter=='User' ? User::factory() : Artist::factory(),
            'commentable_type' => $commenter
        ];
    }
}
