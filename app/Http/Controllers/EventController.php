<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;

use App\Models\Event;

use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Response;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class EventController extends Controller
{
    public function show()
    {
        $userRequests = Auth::user()->events()->select(
            'id',
            'imageurl',
            'title',
            'description',
            'location',
            'event_date',
            'created_at'
        )->get();

        $allRequests = collect($userRequests);

        $sortedRequests = $allRequests->sortByDesc('created_at');

        $currentPage = request()->get('page', 1);
        $perPage = 10;

        $paginatedRequests = new \Illuminate\Pagination\LengthAwarePaginator(
            $sortedRequests->forPage($currentPage, $perPage),
            $sortedRequests->count(),
            $perPage,
            $currentPage
        );

        return view('teacher.events', [
            'events' => $paginatedRequests,
        ]);
    }


    public function eventSearch(Request $request)
    {
        $title = $request->input('name');

        $userRequests = Auth::user()->events()
            ->where('title', 'like', '%' . $title . '%')
            ->select('id', 'imageurl', 'location', 'event_date', 'title', 'description', 'created_at')
            ->orderByDesc('created_at') 
            ->paginate(10); 

            return view('teacher.events', [
                'events' => $userRequests,
            ]);
    }

    public function deleteEvent($id){
        try {
            $Event = Event::findOrFail($id);

            \DB::transaction(function () use ($Event) {
                $Event->delete();
            });

            return redirect('/teacher/all_events')->with('success', 'Event deleted successfully');
        } catch (ModelNotFoundException $e) {
            return redirect('/teacher/all_events')->with('error', 'Event not found');
        } catch (QueryException $e) {
            return redirect('/teacher/all_events')->with('error', 'Error deleting Event and related data');
        } catch (\Exception $e) {
            return redirect('/teacher/all_events')->with('error', 'An unexpected error occurred');
        }
    }

    public function addEvent(){
        return view('teacher.postevents');
    }

    public function postEvent(Request $request){

        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'description' => 'required',
                'description' => 'required',
            ]);

            $imageName = '/images/events.png';
        
            if ($request->hasFile('imageurl')) {
                $profilePicture = $request->file('imageurl');
            
                if ($profilePicture->isValid()) {
                    $image = $profilePicture->hashName();
                    $imageName = '/storage/images/' . $image;
            
                    $profilePicture->storeAs('public/images', $image);
                } else {
                    return redirect()->back()->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }

        
            $announcement = new Event([
                'teacher_id' => Auth::user()->id,
                'event_date' => $request->input('event_date'),
                'location' => $request->input('location'),
                'imageurl' => $imageName,
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);
        
            $announcement->save();
        
            return redirect('/teacher/all_events')->with('success', 'Event created successfully.');
        }
    }

    public function editEvent($id)
    {
        try {
            $events = Event::findOrFail($id);

            return view('teacher.editevent', [
                'events' => $events,
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect('/teacher/all_events')->with('error', 'Events not found');
        }
    }

    
    public function updateEvent(Request $request, $id)
    {
        try {
            $event = Event::findOrFail($id);
    
            $request->validate([
                'title' => 'required',
                'event_date' => 'required',
                'location' => 'required',
                'description' => 'required',
            ]);
    
            if ($request->hasFile('imageurl')) {
                $profilePicture = $request->file('imageurl');
    
                if ($profilePicture->isValid()) {
                    $image = $profilePicture->hashName();
                    $imageName = '/storage/images/' . $image;
    
                    $profilePicture->storeAs('public/images', $image);
    
                    // Delete the old image if it exists
                    if ($event->imageurl && Storage::exists('public/images/' . basename($event->imageurl))) {
                        Storage::delete('public/images/' . basename($event->imageurl));
                    }
    
                    $event->imageurl = $imageName;
                } else {
                    return redirect()->back()->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }
    
            $event->title = $request->input('title');
            $event->event_date = $request->input('event_date');
            $event->location = $request->input('location');
            $event->description = $request->input('description');
    
            $event->save();
    
            return redirect('/teacher/all_events')->with('success', 'Event updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect('/teacher/all_events')->with('error', 'Event not found');
        }
    }




    // ---------------------------------------------------Admin-------------------------------------------------


    public function adminshow()
    { 
        $userRequests = Event::with(['teacher', 'admin'])
        ->select(
            'teacher_id',
            'admin_id',
            'id',
            'imageurl',
            'title',
            'description',
            'location',
            'event_date',
            'created_at'
        )->get();

        $allRequests = collect($userRequests);

        $sortedRequests = $allRequests->sortByDesc('created_at');

        $currentPage = request()->get('page', 1);
        $perPage = 10;

        $paginatedRequests = new \Illuminate\Pagination\LengthAwarePaginator(
            $sortedRequests->forPage($currentPage, $perPage),
            $sortedRequests->count(),
            $perPage,
            $currentPage
        );

        return view('admin.events', [
            'events' => $paginatedRequests,
        ]);
    }
    
    public function admineventSearch(Request $request)
    {
        $title = $request->input('name');

        $userRequests = Event::with(['teacher', 'admin'])
            ->where('title', 'like', '%' . $title . '%')
            ->select('id','teacher_id', 'admin_id', 'imageurl', 'location', 'event_date', 'title', 'description', 'created_at')
            ->orderByDesc('created_at') 
            ->paginate(10); 

            return view('teacher.events', [
                'events' => $userRequests,
            ]);
    }

    public function adminaddEvent(){
        return view('admin.postevents');
    }

    public function adminpostEvent(Request $request){

        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'description' => 'required',
                'description' => 'required',
            ]);

            $imageName = '/images/events.png';
        
            if ($request->hasFile('imageurl')) {
                $profilePicture = $request->file('imageurl');
            
                if ($profilePicture->isValid()) {
                    $image = $profilePicture->hashName();
                    $imageName = 'images/' . $image;
            
                    $profilePicture->storeAs('public/images', $image);
                } else {
                    return redirect()->back()->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }

        
            $announcement = new Event([
                'admin_id' => Auth::user()->id,
                'event_date' => $request->input('event_date'),
                'location' => $request->input('location'),
                'imageurl' => $imageName,
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);
        
            $announcement->save();
        
            return redirect('/admin/all_events')->with('success', 'Event created successfully.');
        }
    }

    public function admindeleteEvent($id){
        try {
            $Event = Event::findOrFail($id);

            \DB::transaction(function () use ($Event) {
                $Event->delete();
            });

            return redirect('/admin/all_events')->with('success', 'Event deleted successfully');
        } catch (ModelNotFoundException $e) {
            return redirect('/admin/all_events')->with('error', 'Event not found');
        } catch (QueryException $e) {
            return redirect('/admin/all_events')->with('error', 'Error deleting Event and related data');
        } catch (\Exception $e) {
            return redirect('/admin/all_events')->with('error', 'An unexpected error occurred');
        }
    }

    public function admineditEvent($id)
    {
        try {
            $events = Event::findOrFail($id);

            return view('admin.editevent', [
                'events' => $events,
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect('/admin/all_events')->with('error', 'Events not found');
        }
    }


    public function adminupdateEvent(Request $request, $id)
    {
        try {
            $event = Event::findOrFail($id);
    
            $request->validate([
                'title' => 'required',
                'event_date' => 'required',
                'location' => 'required',
                'description' => 'required',
            ]);
    
            if ($request->hasFile('imageurl')) {
                $profilePicture = $request->file('imageurl');
    
                if ($profilePicture->isValid()) {
                    $image = $profilePicture->hashName();
                    $imageName = '/storage/images/' . $image;
    
                    $profilePicture->storeAs('public/images', $image);
    
                    // Delete the old image if it exists
                    if ($event->imageurl && Storage::exists('public/images/' . basename($event->imageurl))) {
                        Storage::delete('public/images/' . basename($event->imageurl));
                    }
    
                    $event->imageurl = $imageName;
                } else {
                    return redirect()->back()->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }
    
            $event->title = $request->input('title');
            $event->event_date = $request->input('event_date');
            $event->location = $request->input('location');
            $event->description = $request->input('description');
    
            $event->save();
    
            return redirect('/admin/all_events')->with('success', 'Event updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect('/admin/all_events')->with('error', 'Event not found');
        }
    }
}
