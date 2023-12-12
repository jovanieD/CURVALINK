<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;

use Auth;

use App\Models\Teacher;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Mail;
use App\Mail\CreatedAppointment;

class ScheduleController extends Controller
{
    //

    public function showStudentRequestCertification()
    {
        return view('student.schedules');
    }

    public function getEvents()
    {
        if (Auth::check()) {
            $user = Auth::user();
    
            $schedules = Schedule::where('user_id', $user->id)->get();
    
            return $schedules;
        } else {
            return response()->json(['error' => 'User not authenticated.'], 401);
        }
    }
    

    public function getallschedule()
    {
        $schedules = Schedule::all();
        return $schedules;

    }

    public function createappoinment(Request $request)
        {
            try {
                $id = $request->input('id');
                $type = $request->input('type');
    
                switch ($type) {
                    case 'Certificate':
                        $data = CertificationRequest::find($id);
                        return view('teacher.actions.createappointment')->with('data', $data);
                    case 'Good_Moral':
                        $data = GoodMoralRequest::find($id);
                        return view('teacher.actions.createappointment')->with('data', $data);
                    case 'Form137':
                        $data = Form137Request::find($id);
                        return view('teacher.actions.createappointment')->with('data', $data);
                    default:
                        abort(404);
                }
    
            } catch (\Exception $e) {
                abort(404);
            }
        }

        public function admincreateappoinment(Request $request)
        {
            try {
                $id = $request->input('id');
                $type = $request->input('type');
    
                switch ($type) {
                    case 'Certificate':
                        $data = CertificationRequest::find($id);
                        return view('admin.actions.createappointment')->with('data', $data);
                    case 'Good_Moral':
                        $data = GoodMoralRequest::find($id);
                        return view('admin.actions.createappointment')->with('data', $data);
                    case 'Form137':
                        $data = Form137Request::find($id);
                        return view('admin.actions.createappointment')->with('data', $data);
                    default:
                        abort(404);
                }
    
            } catch (\Exception $e) {
                abort(404);
            }
        }


    public function postappoinment(Request $request)
    {
        try {
            $request->validate([
                'user_id' => 'required',
                'document' => 'required', 
                'document_id' => 'required',
                'requestor' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
                'remarks' => 'nullable',
            ]);

            $user = User::findOrFail($request->input('user_id'));
            $email = $user->email;

            $startDate = Carbon::createFromFormat('m/d/Y', $request->input('startdate'))->format('Y-m-d');
            $endDate = Carbon::createFromFormat('m/d/Y', $request->input('enddate'))->format('Y-m-d');
    
            $schedule = new Schedule([
                'user_id' => $request->input('user_id'),
                'document' => $request->input('document'),
                'startdate' => $startDate,
                'enddate' => $endDate,
                'remarks' => $request->input('remarks'),
            ]);

            $status = 'Scheduled';
            $release = $startDate;
    
            switch ($request->input('document')) {
                case 'Certificate':
                    $documentModel = CertificationRequest::findOrFail($request->input('document_id'));
                    $document = 'Certificate';
                    try{
                        Mail::to($email)->send(new CreatedAppointment( $document, $status, $release));
                    } catch (\Exception $e) {
                        return back()->withErrors(['error' => 'An error occurred while sending the email.'])->withInput();
                    }
                    break;
                case 'Good_Moral':
                    $documentModel = GoodMoralRequest::findOrFail($request->input('document_id'));
                    $document = 'Good Moral';
                    try{
                        Mail::to($email)->send(new CreatedAppointment( $document, $status, $release));
                    } catch (\Exception $e) {
                        return back()->withErrors(['error' => 'An error occurred while sending the email.'])->withInput();
                    }
                    break;
                case 'Form137':
                    $documentModel = Form137Request::findOrFail($request->input('document_id'));
                    $document = 'Form 137';
                    try{
                        Mail::to($email)->send(new CreatedAppointment( $document, $status, $release));
                    } catch (\Exception $e) {
                        return back()->withErrors(['error' => 'An error occurred while sending the email.'])->withInput();
                    }
                    break;
                default:
                    throw new \InvalidArgumentException('Invalid document type.');
            }
    
            $documentModel->schedules()->save($schedule);

            $documentModel->update([
                'status' => 'Scheduled',
                'releasedate' => $startDate,
            ]);
    
            return redirect('/teacher/schedules');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
    }


    public function adminpostappoinment(Request $request)
    {
        try {
            $request->validate([
                'user_id' => 'required',
                'document' => 'required', // Adjust as needed
                'document_id' => 'required',
                'requestor' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
                'remarks' => 'nullable',
            ]);

            $user = User::findOrFail($request->input('user_id'));
            $email = $user->email;

            $startDate = Carbon::createFromFormat('m/d/Y', $request->input('startdate'))->format('Y-m-d');
            $endDate = Carbon::createFromFormat('m/d/Y', $request->input('enddate'))->format('Y-m-d');
    
            $schedule = new Schedule([
                'user_id' => $request->input('user_id'),
                'document' => $request->input('document'),
                'startdate' => $startDate,
                'enddate' => $endDate,
                'remarks' => $request->input('remarks'),
            ]);
    
            $status = 'Scheduled';
            $release = $startDate;
    
            switch ($request->input('document')) {
                case 'Certificate':
                    $documentModel = CertificationRequest::findOrFail($request->input('document_id'));
                    $document = 'Certificate';
                    try{
                        Mail::to($email)->send(new CreatedAppointment( $document, $status, $release));
                    } catch (\Exception $e) {
                        return back()->withErrors(['error' => 'An error occurred while sending the email.'])->withInput();
                    }
                    break;
                case 'Good_Moral':
                    $documentModel = GoodMoralRequest::findOrFail($request->input('document_id'));
                    $document = 'Good Moral';
                    try{
                        Mail::to($email)->send(new CreatedAppointment( $document, $status, $release));
                    } catch (\Exception $e) {
                        return back()->withErrors(['error' => 'An error occurred while sending the email.'])->withInput();
                    }
                    break;
                case 'Form137':
                    $documentModel = Form137Request::findOrFail($request->input('document_id'));
                    $document = 'Form 137';
                    try{
                        Mail::to($email)->send(new CreatedAppointment( $document, $status, $release));
                    } catch (\Exception $e) {
                        return back()->withErrors(['error' => 'An error occurred while sending the email.'])->withInput();
                    }
                    break;
                default:
                    throw new \InvalidArgumentException('Invalid document type.');
            }
    
    
            $documentModel->schedules()->save($schedule);

            $documentModel->update([
                'status' => 'Scheduled',
                'releasedate' => $startDate,
            ]);
    
            return redirect('/admin/schedules');
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, return an error response, etc.)
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
    }



    public function showAllAvailableRequest()
    {
        $certificationRequests = CertificationRequest::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();
        $goodMoralRequests = GoodMoralRequest::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();
        $form137Requests = Form137Request::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();

        $documentCounts = [
            'Pending' => 0,
            'Process' => 0,
            'Scheduled' => 0,
            'Decline' => 0,
        ];

        $documentRequested = [];

        foreach ($certificationRequests as $request) {
            $documentRequested[] = [
                'type' => 'Certificate',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id,
                'user_id' => $request->user_id,
            ];
            $documentCounts[$request->status]++;
        }

        foreach ($goodMoralRequests as $request) {
            $documentRequested[] = [
                'type' => 'Good_Moral',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id,
                'user_id' => $request->user_id,
            ];
            $documentCounts[$request->status]++;
        }

        foreach ($form137Requests as $request) {
            $documentRequested[] = [
                'type' => 'Form137',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id,
                'user_id' => $request->user_id,
            ];
            $documentCounts[$request->status]++;
        }

        $allRequests = collect($documentRequested);

        $sortedRequests = $allRequests->sortByDesc('created_at');

        $currentPage = request()->get('page', 1);
        $perPage = 10;
        $paginatedRequests = new \Illuminate\Pagination\LengthAwarePaginator(
            $sortedRequests->forPage($currentPage, $perPage),
            $sortedRequests->count(),
            $perPage,
            $currentPage
        );

        return view('teacher.addschedule', [
            'documentRequested' => $paginatedRequests,
            'documentCounts' => $documentCounts,
        ]);
    }

    public function updateEvent(Request $request, $eventId)
    {
        $schedule = Schedule::findOrFail($eventId);

        $schedule->update([
            'startdate' => $request->input('startdate'),
            'enddate' => $request->input('enddate'),
            // Update other fields as needed
        ]);

        return response()->json(['message' => 'Event updated successfully']);
    }

    public function adminUpdateEvent(Request $request, $eventId)
    {
        $schedule = Schedule::findOrFail($eventId);

        $schedule->update([
            'startdate' => $request->input('startdate'),
            'enddate' => $request->input('enddate'),
        ]);

        return response()->json(['message' => 'Event updated successfully']);
    }



    // public function searchRequests(Request $request)
    // {
    //     $searchKeywords = $request->input('requestor');

    //     $certificationRequests = CertificationRequest::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();
    //     $goodMoralRequests = GoodMoralRequest::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();
    //     $form137Requests = Form137Request::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();

    // }


    public function addschedule()
    {
        $certificationRequests = CertificationRequest::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();
        $goodMoralRequests = GoodMoralRequest::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();
        $form137Requests = Form137Request::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->whereNotIn('status', ['Pending', 'Scheduled'])->get();

        $documentCounts = [
            'Pending' => 0,
            'Process' => 0,
            'Scheduled' => 0,
            'Decline' => 0,
        ];

        $documentRequested = [];

        foreach ($certificationRequests as $request) {
            $documentRequested[] = [
                'type' => 'Certificate',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id,
                'user_id' => $request->user_id,
            ];
            $documentCounts[$request->status]++;
        }

        foreach ($goodMoralRequests as $request) {
            $documentRequested[] = [
                'type' => 'Good_Moral',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id,
                'user_id' => $request->user_id,
            ];
            $documentCounts[$request->status]++;
        }

        foreach ($form137Requests as $request) {
            $documentRequested[] = [
                'type' => 'Form137',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id,
                'user_id' => $request->user_id,
            ];
            $documentCounts[$request->status]++;
        }

        $allRequests = collect($documentRequested);

        $sortedRequests = $allRequests->sortByDesc('created_at');

        $currentPage = request()->get('page', 1);
        $perPage = 10;
        $paginatedRequests = new \Illuminate\Pagination\LengthAwarePaginator(
            $sortedRequests->forPage($currentPage, $perPage),
            $sortedRequests->count(),
            $perPage,
            $currentPage
        );

        return view('admin.addschedule', [
            'documentRequested' => $paginatedRequests,
            'documentCounts' => $documentCounts,
        ]);
    }
}
