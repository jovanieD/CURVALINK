<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageTeachersController extends Controller
{
    public function showAllTeacher(){
        return view('admin.allteachers');
    }
}
