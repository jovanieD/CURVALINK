<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

use Auth;


class ScheduleController extends Controller
{
    //

    public function showStudentRequestCertification()
    {
        return view('student.schedules');
    }

    public function getEvents()
    {
        $user = Auth::user();

        $certificationRequests = $user->schedule()->get();
        return $certificationRequests;
    }

    public function getallschedule()
    {
        $schedules = Schedule::all();
        return $schedules;

    }


    public function createappoinment(){
        return view('teacher.actions.createappointment');
    }





   

    public function search(Request $request)
    {
        $searchKeywords = $request->input('title');

        $matchingEvents = Schedule::where('title', 'like', '%' . $searchKeywords . '%')->get();

        return response()->json($matchingEvents);
    }
}
