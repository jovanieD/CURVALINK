<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;

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

 
    public function updateGoodMoralRequest(Request $request, $id)
    {
        try {
            // Validation rules
            $validationRules = [
                'idnumber' => 'required|string|max:32',
                'firstname' => 'required|string|max:64',
                'middlename' => 'nullable|string|max:64',
                'lastname' => 'required|string|max:32',
                'purpose' => 'required|string|max:200',
                'requestorfirstname' => 'required|string|max:32',
                'requestorlastname' => 'required|string|max:32',
                'requestorsaddress' => 'required|string|max:64',
                'requestorscity' => 'required|string|max:32',
                'requestorsprovince' => 'required|string|max:32',
            ];

            // Validate the request
            $request->validate($validationRules);

            // Find the existing GoodMoralRequest by id
            $existingRequest = GoodMoralRequest::findOrFail($id);

            // Update the existing record
            $existingRequest->update([
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

            // Redirect to the dashboard or any other appropriate route
            return redirect('/dashboard');
        } catch (ValidationException $e) {
            // If validation fails, redirect back with errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle other exceptions if needed
            return redirect()->back()->withErrors([$e->getMessage()])->withInput();
        }
    }

    public function updateGoodMoral(Request $request, $id)
    {
        try {
            // Validation rules
            $validationRules = [
                'idnumber' => 'required|string|max:32',
                'firstname' => 'required|string|max:64',
                'middlename' => 'nullable|string|max:64',
                'lastname' => 'required|string|max:32',
                'purpose' => 'required|string|max:200',
                'requestorfirstname' => 'required|string|max:32',
                'requestorlastname' => 'required|string|max:32',
                'requestorsaddress' => 'required|string|max:64',
                'requestorscity' => 'required|string|max:32',
                'requestorsprovince' => 'required|string|max:32',
                'status' => 'required|string|max:32',
            ];

            // Validate the request
            $request->validate($validationRules);

            // Find the existing GoodMoralRequest by id
            $existingRequest = GoodMoralRequest::findOrFail($id);

            // Update the existing record
            $existingRequest->update([
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
                'remarks' => $request->input('remarks'),
                'status' => $request->input('status'),
            ]);

            // Redirect to the dashboard or any other appropriate route
            return redirect('/teacher/dashboard');
        } catch (ValidationException $e) {
            // If validation fails, redirect back with errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle other exceptions if needed
            return redirect()->back()->withErrors([$e->getMessage()])->withInput();
        }
    }


}
