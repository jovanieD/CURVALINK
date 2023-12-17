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
            'location' => 'MMSNHS',
        ]);

        Event::create([
            'teacher_id' => '21', 
            'title' => 'Cruva NHS Teachers receive new table for Table Tennis',
            'description' => 'The teachers of Curva National High School received equipment for Table Tennis from the generous donor Mr. Guillermo Cabucos Jr. in preparation for the upcoming Intramurals and MSAA 2023',
            'event_date' => '2023-12-01 10:00:00',
            'imageurl' => '/images/donation.jpg',
            'location' => 'MMSNHS',
        ]);

        Event::create([
            'teacher_id' => '5',
            'title' => 'Curva NHS celebrates World\'s Teahcers Day',
            'description' => 'The SSLG of Curva National High School together with the rest of the Curvanians celebrated and prepared a funny and amazing program for the teachers in celebration of the World Teacher\'s Day',
            'event_date' => '2023-12-01 10:00:00',
            'imageurl' => '/images/teachersday.jpg',
            'location' => 'MMSNHS',
        ]);

        Event::create([
            'teacher_id' => '2',
            'title' => '𝐌𝐚𝐫𝐭𝐢𝐧 𝐌. 𝐒𝐚𝐥𝐢𝐦𝐛𝐚𝐧𝐠𝐨𝐧 𝐭𝐫𝐢𝐮𝐦𝐩𝐡𝐬 𝐌𝐮𝐧𝐢𝐜𝐢𝐩𝐚𝐥 𝐅𝐞𝐬𝐭𝐢𝐯𝐚𝐥 𝐨𝐟 𝐓𝐚𝐥𝐞𝐧𝐭𝐬 𝟐𝟎𝟐𝟑',
            'description' => 'Here are the results of the recently concluded Municipal Festival of Talents 2023
            Oratorical Composition and Presentation
            🥇Kenneth James Booc
            Sulat-Bigkas Talumpati 
            🥇Alyssa Therese Manginsay 
            Vocal Solo
            🥇Merry Jumao-as
            Likhawitan 
            🥈Eljen Mae Tabarnera 
            Duet
            🥉Leah Angelica Padillo & Svinsky Mink Munasque 
            Continue reaching the FRONDOSE PEAK ✨',
            'event_date' => '2023-12-07',
            'imageurl' => '/images/triumphs.jpg',
            'location' => 'MMSNHS',
        ]);
    }
        
}
