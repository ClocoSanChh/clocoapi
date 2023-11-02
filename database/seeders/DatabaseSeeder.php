<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Comment::factory(30)->create();

        \App\Models\User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'test'
        ]);
    }
}
