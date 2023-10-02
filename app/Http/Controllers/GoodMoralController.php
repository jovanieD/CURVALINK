<?php

namespace App\Http\Controllers;

use App\Models\GoodMoral;
use App\Http\Requests\StoreGoodMoralRequest;
use App\Http\Requests\UpdateGoodMoralRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GoodMoralController extends Controller
{
    
    public function index()
    {
        return view('teacher.goodmoral');
    }

    public function getEvents()
    {
        $GoodMorals = GoodMoral::all();
        return response()->json($GoodMorals);
    }

    public function deleteEvent($id)
    {
        $GoodMoral = GoodMoral::findOrFail($id);
        $GoodMoral->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }

    public function update(Request $request, $id)
    {
        $GoodMoral = GoodMoral::findOrFail($id);

        $GoodMoral->update([
            'start' => Carbon::parse($request->input('start_date'))->setTimezone('UTC'),
            'end' => Carbon::parse($request->input('end_date'))->setTimezone('UTC'),
        ]);

        return response()->json(['message' => 'Event moved successfully']);
    }

    public function resize(Request $request, $id)
    {
        $GoodMoral = GoodMoral::findOrFail($id);

        $newEndDate = Carbon::parse($request->input('end_date'))->setTimezone('UTC');
        $GoodMoral->update(['end' => $newEndDate]);

        return response()->json(['message' => 'Event resized successfully.']);
    }

    public function search(Request $request)
    {
        $searchKeywords = $request->input('title');

        $matchingEvents = GoodMoral::where('title', 'like', '%' . $searchKeywords . '%')->get();

        return response()->json($matchingEvents);
    }



    // -------------------------------------------------------For Student---------------------------------------------

    public function showScheduleForGoodMoral()
    {
        return view('student.schedule-goodmoral');
    }

    public function getScheduleForGooMoral()
    {
        $GoodMorals = GoodMoral::all();
        return response()->json($GoodMorals);
    }
}
