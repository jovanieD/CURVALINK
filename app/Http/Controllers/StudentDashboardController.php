<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;


class StudentDashboardController extends Controller
{
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
    
        // Sort the array by created_at in descending order
        usort($documentRequested, function($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });
    
        return view('student.dashboard', [
            'documentRequested' => $documentRequested,
            'documentCounts' => $documentCounts,
        ]);
    }

    public function editCertificate(Request $request) {
        $id = $request->input('id');
        $certificate = CertificationRequest::find($id);
        return response()->json(['certificate' => $certificate]);
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


