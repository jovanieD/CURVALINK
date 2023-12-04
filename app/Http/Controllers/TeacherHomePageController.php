<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;
use App\Models\Event;

class TeacherHomePageController extends Controller
{

    public function showabout(){
        return view('teacher.home.about');
    }

    public function showoffers(){

    }

    public function showannouncments(){
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
        return view('teacher.home.announcement', compact('latestAnnouncement', 'paginatedAnnouncement'));
    }

    public function teacherannouncementsearch(Request $request){
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
        return view('teacher.home.announcement', compact('latestAnnouncement', 'paginatedAnnouncement'));
    }

    public function showevents(){
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
    
        return view('teacher.home.events', compact('latestEvents', 'paginatedEvents'));
    }

    public function teachereventssearch(Request $request){
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
        return view('teacher.home.events', compact('latestEvents', 'paginatedEvents'));
    }

    public function showcontact(){
        return view('teacher.home.contact');
    }

}
