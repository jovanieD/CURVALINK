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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'User Vanie',
            'email' => 'user@example.com',
        ]);

        \App\Models\Admin::factory()->create([
            'name' => 'Admin Vanie',
            'email' => 'admin@example.com',
        ]);

        \App\Models\Teacher::factory()->create([
            'name' => 'Teacher Vanie',
            'email' => 'teacher@example.com',
        ]);

        // \App\Models\GoodMoral::factory(2)->create();
    }
}
