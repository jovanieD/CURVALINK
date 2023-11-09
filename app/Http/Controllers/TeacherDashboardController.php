<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;

use Auth;


class TeacherDashboardController extends Controller
{
    public function showTeacherDashboard(){

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
}
