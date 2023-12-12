<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CertificationRequest;
use Database\Factories\CertificationRequestFactory;

use App\Models\Form137Request;
use Database\Factories\Form137RequestFactory;

use App\Models\GoodMoralRequest;
use Database\Factories\GoodMoralRequestFactory;

class Documents extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GoodMoralRequest::factory()->count(10)->create(); 
        Form137Request::factory()->count(10)->create();
        CertificationRequest::factory()->count(10)->create();
    }
}
