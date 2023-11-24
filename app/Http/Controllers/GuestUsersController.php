<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestUsersController extends Controller
{

    public function getcertificate(){
        if (auth()->check()) {
            return redirect('/request/certificate');
        } else {
            return redirect('/login');
        }
    }

    public function getgoodmoral(){
        if (auth()->check()) {
            return redirect('/request/goodmoral');
        } else {
            return redirect('/login');
        }
    }

    public function getform(){
        if (auth()->check()) {
            return redirect('/request/form137');
        } else {
            return redirect('/login');
        }
    }


    public function  index(){
        return view('welcome');
    }

    public function  showabout(){
        return view('about.about');
    }

    public function  showoffers(){
        return view('offer.offer');
    }

    public function  showannouncement(){
        return view('announcement.announcement');
    }

    public function  showevent(){
        return view('event.event');
    }

    public function  showcontact(){
        return view('contact.contact');
    }
}
