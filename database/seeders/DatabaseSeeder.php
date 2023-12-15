<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(20)->create();

        // \App\Models\Teacher::factory(20)->create();

        // \App\Models\Admin::factory(20)->create();

        \App\Models\User::factory()->create([
            'firstname' => 'User',
            'email' => 'user@example.com',
        ]);

        \App\Models\Admin::factory()->create([
            'firstname' => 'CurvaLink',
            'lastname' => 'Administrator',
            'email' => 'linkcurva@gmail.com',
            'password' => '$2y$10$f19DohqQgLXKb9YQPgrrretVQ5.A5RY4GFu7kuovp4VmO1Vb3tFcq', //@dm1nP@$$word
        ]);

        \App\Models\Admin::factory()->create([
            'firstname' => 'Shakera',
            'lastname' => 'Tinapay',
            'email' => 'shakera_joy.tinapay@student.passerellesnumeriques.org',
            'password' => '$2y$10$f19DohqQgLXKb9YQPgrrretVQ5.A5RY4GFu7kuovp4VmO1Vb3tFcq', //@dm1nP@$$word
        ]);

        \App\Models\Admin::factory()->create([
            'firstname' => 'Christina',
            'lastname' => 'Mangapuro',
            'email' => 'christina.mangapuro@student.passerellesnumeriques.org',
            'password' => '$2y$10$f19DohqQgLXKb9YQPgrrretVQ5.A5RY4GFu7kuovp4VmO1Vb3tFcq', //@dm1nP@$$word
        ]);

        \App\Models\Admin::factory()->create([
            'firstname' => 'Clint Anthony',
            'lastname' => 'Savilla',
            'email' => 'clint_anthony.savilla@student.passerellesnumeriques.org',
            'password' => '$2y$10$f19DohqQgLXKb9YQPgrrretVQ5.A5RY4GFu7kuovp4VmO1Vb3tFcq', //@dm1nP@$$word
        ]);

        // \App\Models\Teacher::factory()->create([
        //     'firstname' => 'Teacher',
        //     'email' => 'teacher@example.com',
        // ]);

        // \App\Models\Event::factory()->create([
            
        // ]);

        // \App\Models\Announcement::factory(20)->create();

        \App\Models\CertificationRequest::factory(3)->create();
        \App\Models\GoodMoralRequest::factory(3)->create();
        \App\Models\Form137Request::factory(3)->create();

        // Schedule::factory(20)->create();
    }
}

