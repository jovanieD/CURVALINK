<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GoodMoralRequest;
use Auth;

class GoodMoralRequestController extends Controller
{
    public function showFormGoodMoral(){
        return view('student.request-goodmoral');
    }

    public function createNewGoodMoralRequest(Request $request){
        try {
            // Validation rules
            $validationRules = [
                'idnumber' => 'required|string|max:255',
                'firstname' => 'required|string|max:255',
                'middlename' => 'nullable|string|max:255',
                'lastname' => 'required|string|max:255',
                'purpose' => 'required|string|max:255',
                'requestorfirstname' => 'required|string|max:255',
                'requestorlastname' => 'required|string|max:255',
                'requestorsaddress' => 'required|string|max:255',
                'requestorscity' => 'required|string|max:255',
                'requestorsprovince' => 'required|string|max:255',
            ];

            // Validate the request
            $request->validate($validationRules);

            // Create a new GoodMoralRequest
            $newRequest = GoodMoralRequest::create([
                'user_id' => Auth::user()->id,
                'idnumber' => $request->input('idnumber'),
                'firstname' => $request->input('firstname'),
                'middlename' => $request->input('middlename'),
                'lastname' => $request->input('lastname'),
                'purpose' => $request->input('purpose'),
                'requestorfirstname' => $request->input('requestorfirstname'),
                'requestorlastname' => $request->input('requestorlastname'),
                'requestorsaddress' => $request->input('requestorsaddress'),
                'requestorscity' => $request->input('requestorscity'),
                'requestorsprovince' => $request->input('requestorsprovince'),
            ]);

            // Redirect to the dashboard
            return redirect('dashboard');
        } catch (ValidationException $e) {
            // If validation fails, redirect back with errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
}
