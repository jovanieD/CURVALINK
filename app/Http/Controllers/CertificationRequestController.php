<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use Auth;

class CertificationRequestController extends Controller
{
    public function showStudentRequestCertification()
    {
        return view('student.schedule-certificate');
    }

    public function createNewCertificationRequest(Request $request){
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal' => 'required|string|max:10',
            'phonenumber' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'purpose' => 'required|string|max:255',
        ]);
    
        $newRequest = CertificationRequest::create([
            'user_id' => Auth::user()->id,
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'address' => $request->input('address'),
            'municipality' => $request->input('municipality'),
            'province' => $request->input('province'),
            'postal' => $request->input('postal'),
            'phonenumber' => $request->input('phonenumber'), // Fixed typo in 'phonenumber'
            'email' => $request->input('email'),
            'purpose' => $request->input('purpose'),
        ]);

        return redirect('dashboard');
    
    }
}
