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
        // $schedules = Schedule::all();
        // return $schedules;
        $user = Auth::user();

        $certificationRequests = $user->schedule()->get();
        return $certificationRequests;
    }

   

    public function search(Request $request)
    {
        $searchKeywords = $request->input('title');

        $matchingEvents = Schedule::where('title', 'like', '%' . $searchKeywords . '%')->get();

        return response()->json($matchingEvents);
    }
}
