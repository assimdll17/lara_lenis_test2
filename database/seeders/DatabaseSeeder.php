<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Feature::factory()->create([
                'name' => 'Feature 5',
                'text' => 'The feature 5 description',
        ]);

        \App\Models\Partner::factory()->create([
                'title' => 'Partner 5',
                'source' => 'The Partner 5 Role',
                'href' => 'https://postman.com'
        ]);
    }
}
