<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function showStudentRequestCertification()
    {
        return view('student.schedule-certificate');
    }
}
