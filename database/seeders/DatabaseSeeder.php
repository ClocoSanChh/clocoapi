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

        \App\Models\User::create([
            'email' => 'test@example.com',
            'password' => 'test',
            'firstname' => 'test',
            'lastname' => 'test',
            'gender' => 'male',
            'dob' => '2000-01-01',
            'address' => 'test'
        ]);
    }
}
