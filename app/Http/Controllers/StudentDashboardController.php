<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;


use Mail;


class StudentDashboardController extends Controller
{
    // public function showStudentDashboard(){

    //     $certificationRequests = CertificationRequest::select('id' , 'document', 'created_at', 'status')->latest()->paginate(10);
    //     $goodMoralRequests = GoodMoralRequest::select('id', 'document', 'created_at', 'status')->latest()->paginate(10);
    //     $form137Requests = Form137Request::select('id', 'document', 'created_at', 'status')->latest()->paginate(10);
    
    //     $documentCounts = [
    //         'Pending' => 0,
    //         'Process' => 0,
    //         'Scheduled' => 0,
    //         'Received' => 0,
    //     ];
    
    //     $documentRequested = [];
    
    //     foreach($certificationRequests as $request){
    //         $documentRequested[] = [
    //             'type' => 'Certificate',
    //             'created_at' => $request->created_at,
    //             'status' => $request->status,
    //             'id' => $request->id
    //         ];
    //         $documentCounts[$request->status]++;
    //     }
    
    //     foreach($goodMoralRequests as $request){
    //         $documentRequested[] = [
    //             'type' => 'Good Moral',
    //             'created_at' => $request->created_at,
    //             'status' => $request->status,
    //             'id' => $request->id
    //         ];
    //         $documentCounts[$request->status]++;
    //     }
    
    //     foreach($form137Requests as $request){
    //         $documentRequested[] = [
    //             'type' => 'Form137',
    //             'created_at' => $request->created_at,
    //             'status' => $request->status,
    //             'id' => $request->id
    //         ];
    //         $documentCounts[$request->status]++;
    //     }
    
    //     // Sort the array by created_at in descending order
    //     usort($documentRequested, function($a, $b) {
    //         return strtotime($b['created_at']) - strtotime($a['created_at']);
    //     });
    
    //     return view('student.dashboard', [
    //         'documentRequested' => $documentRequested,
    //         'documentCounts' => $documentCounts,
    //     ]);
    // }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::send('contact.contact', $data, function($message) {
            $message->to('jovaniedasian@gmail.com', 'Your Name')->subject('Contact Us Form Submission');
        });

        return redirect('/contact')->with('success', 'Message sent successfully!');
    
}

    public function showStudentDashboard(){

        $certificationRequests = CertificationRequest::select('id' , 'document', 'created_at', 'status')->get();
        $goodMoralRequests = GoodMoralRequest::select('id', 'document', 'created_at', 'status')->get();
        $form137Requests = Form137Request::select('id', 'document', 'created_at', 'status')->get();
    
        $documentCounts = [
            'Pending' => 0,
            'Process' => 0,
            'Scheduled' => 0,
            'Received' => 0,
        ];
    
        $documentRequested = [];
    
        foreach($certificationRequests as $request){
            $documentRequested[] = [
                'type' => 'Certificate',
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id
            ];
            $documentCounts[$request->status]++;
        }
    
        foreach($goodMoralRequests as $request){
            $documentRequested[] = [
                'type' => 'Good Moral',
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id
            ];
            $documentCounts[$request->status]++;
        }
    
        foreach($form137Requests as $request){
            $documentRequested[] = [
                'type' => 'Form137',
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id
            ];
            $documentCounts[$request->status]++;
        }
    
        // Combine all the requests into a single collection
        $allRequests = collect($documentRequested);
    
        // Sort the array by created_at in descending order
        $sortedRequests = $allRequests->sortByDesc('created_at');
    
        // Convert the sorted collection to a paginated collection
        $currentPage = request()->get('page', 1); // Get the current page from the request
        $perPage = 10; // Number of items per page
        $paginatedRequests = new \Illuminate\Pagination\LengthAwarePaginator(
            $sortedRequests->forPage($currentPage, $perPage),
            $sortedRequests->count(),
            $perPage,
            $currentPage
        );
    
        return view('student.dashboard', [
            'documentRequested' => $paginatedRequests,
            'documentCounts' => $documentCounts,
        ]);
    }
    

    public function getRequest(Request $request) {
        $request = $request->id;
        $data = CertificationRequest::find($request);
        return view('actions.edit-request')->with('data',  $data);
        // return $request;
    }

    public function viewRequest(Request $request) {
        $request = $request->id;
        $data = CertificationRequest::find($request);
        return view('actions.view-request')->with('data',  $data);
    }

    public function deleteRequest(Request $request) {
        $request = $request->id;
        $data = CertificationRequest::find($request);
        $data->delete();
        return redirect('/dashboard');
    }
    
    
    

    // public function showStudentDashboard(){
    //     $certificationRequests = CertificationRequest::select('created_at', 'status')->orderBy('created_at', 'desc')->get();
        // $goodMoralRequests = GoodMoralRequest::select('created_at', 'status')->orderBy('created_at', 'desc')->get();
        // $form137Requests = Form137Request::select('created_at', 'status')->orderBy('created_at', 'desc')->get();
    
        // $certificationRequestCount = CertificationRequest::count();
        // $goodMoralRequestCount = GoodMoralRequest::count();
        // $form137RequestCount = Form137Request::count();
    
        // $totalRequests = $certificationRequestCount + $goodMoralRequestCount + $form137RequestCount;

        // $totalRequests = $certificationRequestCount;
    
        // return view('student.dashboard', [
        //     'certificationRequests' => $certificationRequests,
            // 'goodMoralRequests' => $goodMoralRequests,
            // 'form137Requests' => $form137Requests,
            // 'totalRequests' => $totalRequests,
            // 'goodMoralRequestCount' => $goodMoralRequestCount,
            // 'form137RequestCount' => $form137RequestCount
        // ]);
}


