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
            'name' => 'Test User',
            'email' => 'user@example.com',
        ]);

        \App\Models\Teacher::factory()->create([
            'name' => 'Test User',
            'email' => 'teacher@example.com',
        ]);

        \App\Models\Admin::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@example.com',
        ]);

         \App\Models\Events::factory(5)->create();

         \App\Models\Announcement::factory(5)->create();
        
    }
}
