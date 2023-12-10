<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;

use App\Models\Teacher;
use App\Models\Schedule;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use App\Models\Event;

use Illuminate\Support\Facades\Response;

class AdminHomePageController extends Controller
{
    public function showhome(){
        $latestEvents = Event::latest()->take(3)->get();

        return view('admin.home.home', compact('latestEvents'));
    }

    public function showabout(){
        return view('admin.home.about');
    }

    public function showoffers(){
        return view('admin.home.offers');
    }

    public function showannouncment(){

    }

    public function showevents(){

    }

    public function showcontact(){
        return view('admin.home.contacts');
    }
}
