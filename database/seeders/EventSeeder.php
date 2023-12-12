<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Event;
use App\Models\Form137Request;
use App\Models\GoodMoralRequest;
use App\Models\CertificationRequest;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Event::create([
            'teacher_id' => '21', 
            'title' => 'Trio Teachers Offer free lugaw to the Curvanians',
            'description' => 'The teachers of Curva National High School, Mr Reynaldo Villegas, Mrs. Elisa Amores and Mrs. Nelgen Demapitan served delicious lugaw and champorado to the fellow Curvanians who arrived early in the school',
            'event_date' => '2023-12-01 10:00:00',
            'imageurl' => '/images/freelugaw.jpg',
            'location' => 'Curva NHS',
        ]);

        Event::create([
            'teacher_id' => '21', 
            'title' => 'Cruva NHS Teachers receive new table for Table Tennis',
            'description' => 'The teachers of Curva National High School received equipment for Table Tennis from the generous donor Mr. Guillermo Cabucos Jr. in preparation for the upcoming Intramurals and MSAA 2023',
            'event_date' => '2023-12-01 10:00:00',
            'imageurl' => '/images/donation.jpg',
            'location' => 'Curva NHS',
        ]);

        Event::create([
            'teacher_id' => '21',
            'title' => 'Curva NHS celebrates World\'s Teahcers Day',
            'description' => 'The SSLG of Curva National High School together with the rest of the Curvanians celebrated and prepared a funny and amazing program for the teachers in celebration of the World Teacher\'s Day',
            'event_date' => '2023-12-01 10:00:00',
            'imageurl' => '/images/teachersday.jpg',
            'location' => 'Curva NHS',
        ]);
    }
        
}
