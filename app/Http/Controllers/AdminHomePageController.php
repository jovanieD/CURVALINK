<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    public function showhome(){
        return view('page.homeForAdmin');
    }

    public function showabout(){

    }

    public function showoffers(){

    }

    public function showannouncment(){

    }

    public function showevents(){

    }

    public function showcontact(){
        return view('admin.contact');
    }
}
