<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function showStudentProfile(){
        return view('student.settings');
    }

    public function editProfile(){
        return view('student.updateProfile');
    }
}
