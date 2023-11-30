<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Models\Announcement;

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

        $allAnnouncement = Announcement::latest()->get();

        $currentPage = request()->get('page', 1); 
        $perPage = 4;  
        $paginatedAnnouncement = new \Illuminate\Pagination\LengthAwarePaginator(
            $allAnnouncement->forPage($currentPage, $perPage),
            $allAnnouncement->count(),
            $perPage,
            $currentPage
        );

        $latestAnnouncement = $allAnnouncement->take(1);
        return view('announcement.announcement', compact('latestAnnouncement', 'paginatedAnnouncement'));
    }

    public function searchAnnouncement(Request $request){

        $name = $request->input('name');

        $query = Announcement::where(function ($query) use ($name) {
            $query->where('title', 'LIKE', '%' . $name . '%');
        });

        $allAnnouncement = Announcement::latest()->get();

        $currentPage = request()->get('page', 1); 
        $perPage = 4;  
        $paginatedAnnouncement = new \Illuminate\Pagination\LengthAwarePaginator(
            $allAnnouncement->forPage($currentPage, $perPage),
            $allAnnouncement->count(),
            $perPage,
            $currentPage
        );

        $latestAnnouncement = $query->paginate(1); 
        return view('announcement.announcement', compact('latestAnnouncement', 'paginatedAnnouncement'));
    }

    

    public function showevent()
    {
        
        $allEvents = Event::latest()->get();
    
        $currentPage = request()->get('page', 1); 
        $perPage = 9;  
        $paginatedEvents = new \Illuminate\Pagination\LengthAwarePaginator(
            $allEvents->forPage($currentPage, $perPage),
            $allEvents->count(),
            $perPage,
            $currentPage
        );
    
        $latestEvents = $allEvents->take(4);
    
        return view('event.event', compact('latestEvents', 'paginatedEvents'));
    }

    public function searchEvent(Request $request)
    {
        $name = $request->input('name');

        $query = Event::where(function ($query) use ($name) {
            $query->where('title', 'LIKE', '%' . $name . '%');
        });

        $allEvents = Event::latest()->get();
    
        $currentPage = request()->get('page', 1); 
        $perPage = 9;  
        $paginatedEvents = new \Illuminate\Pagination\LengthAwarePaginator(
            $allEvents->forPage($currentPage, $perPage),
            $allEvents->count(),
            $perPage,
            $currentPage
        );

        $latestEvents = $query->paginate(10); 

        return view('event.event', compact('latestEvents', 'paginatedEvents'));
    }
    


    public function  showcontact(){
        return view('contact.contact');
    }
}
