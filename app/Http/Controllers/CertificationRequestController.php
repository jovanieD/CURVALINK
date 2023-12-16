<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;

use Auth;
use App\Models\User;

use Illuminate\Support\Facades\Mail;
use App\Mail\DocumentRequest;

class CertificationRequestController extends Controller
{


    public function showCertificateForm(){
        return view('student.request-certificate');
    }

    public function createNewCertificationRequest(Request $request){
        try {
            $request->validate([
                'firstname' => 'required|string|max:32',
                'lastname' => 'required|string|max:32',
                'address' => 'required|string|max:64',
                'municipality' => 'required|string|max:32',
                'province' => 'required|string|max:32',
                'postal' => 'required|string|max:7|min:4',
                'phonenumber' => 'required|string|max:11|min:11',
                'email' => 'required|string|email|max:64',
                'purpose' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'lastschoolyear' => 'required|string|max:255',
            ]);
        
            try {
                $useremail = Auth::user()->email;
                $document = 'Certificate';
                $status = 'Pending';
            
                Mail::to($useremail)->send(new DocumentRequest($document, $status));
            
            } catch (\Exception $e) {
                return back()->withErrors(['error' => 'An error occurred while sending the email.'])->withInput();
            }

            $newRequest = CertificationRequest::create([
                'user_id' => Auth::user()->id,
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'address' => $request->input('address'),
                'municipality' => $request->input('municipality'),
                'province' => $request->input('province'),
                'postal' => $request->input('postal'),
                'phonenumber' => $request->input('phonenumber'),
                'email' => $request->input('email'),
                'purpose' => $request->input('purpose'),
                'department' => $request->input('department'),
                'lastschoolyear' => $request->input('lastschoolyear'),
            ]);
        
            return redirect('dashboard');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred.'])->withInput();
        }
        
    
    }


        public function updateCertificationRequest(Request $request, $id)
        {
            try {
                // Validation rules
                $validationRules = [
                    'firstname' => 'required|string|max:32',
                    'lastname' => 'required|string|max:32',
                    'address' => 'required|string|max:64',
                    'municipality' => 'required|string|max:32',
                    'province' => 'required|string|max:32',
                    'postal' => 'required|string|max:7|min:4',
                    'phonenumber' => 'required|string|max:11|min:11',
                    'email' => 'required|string|email|max:64',
                    'purpose' => 'required|string|max:255',
                    'department' => 'required|string|max:255',
                    'lastschoolyear' => 'required|string|max:255',
                ];

                // Validate the request
                $request->validate($validationRules);

                // Find the existing record by id
                $existingRequest = CertificationRequest::findOrFail($id);

                // Update the existing record
                $existingRequest->update([
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'address' => $request->input('address'),
                    'municipality' => $request->input('municipality'),
                    'province' => $request->input('province'),
                    'postal' => $request->input('postal'),
                    'phonenumber' => $request->input('phonenumber'),
                    'email' => $request->input('email'),
                    'purpose' => $request->input('purpose'),
                    'department' => $request->input('department'),
                    'lastschoolyear' => $request->input('lastschoolyear'),
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


        public function updateCertification(Request $request, $id)
        {
            try {
                // Validation rules
                $validationRules = [
                    'firstname' => 'required|string|max:32',
                    'lastname' => 'required|string|max:32',
                    'address' => 'required|string|max:64',
                    'municipality' => 'required|string|max:32',
                    'province' => 'required|string|max:32',
                    'postal' => 'required|string|max:7|min:4',
                    'phonenumber' => 'required|string|max:11|min:11',
                    'email' => 'required|string|email|max:64',
                    'purpose' => 'required|string',
                    'status' => 'required|string|max:32',
                ];

                // Validate the request
                $request->validate($validationRules);

                // Find the existing record by id
                $existingRequest = CertificationRequest::findOrFail($id);

                // Update the existing record
                $existingRequest->update([
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'address' => $request->input('address'),
                    'municipality' => $request->input('municipality'),
                    'province' => $request->input('province'),
                    'postal' => $request->input('postal'),
                    'phonenumber' => $request->input('phonenumber'),
                    'email' => $request->input('email'),
                    'purpose' => $request->input('purpose'),
                    'remarks' => $request->input('remarks'),
                    'status' => $request->input('status'),
                    'releasedate' => '',
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

        public function getRequestorProfile($userId)
        {
            $requestor = User::find($userId);
            return view('teacher.requestorprofile', [
                'requestor' => $requestor,
        ]);
    }

    public function adminUpdateCertification(Request $request, $id)
        {
            try {
                // Validation rules
                $validationRules = [
                    'firstname' => 'required|string|max:32',
                    'lastname' => 'required|string|max:32',
                    'address' => 'required|string|max:64',
                    'municipality' => 'required|string|max:32',
                    'province' => 'required|string|max:32',
                    'postal' => 'required|string|max:7|min:4',
                    'phonenumber' => 'required|string|max:11|min:11',
                    'email' => 'required|string|email|max:64',
                    'purpose' => 'required|string|max:255',
                    'status' => 'required|string|max:32',
                ];

                // Validate the request
                $request->validate($validationRules);

                // Find the existing record by id
                $existingRequest = CertificationRequest::findOrFail($id);

                // Update the existing record
                $existingRequest->update([
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'address' => $request->input('address'),
                    'municipality' => $request->input('municipality'),
                    'province' => $request->input('province'),
                    'postal' => $request->input('postal'),
                    'phonenumber' => $request->input('phonenumber'),
                    'email' => $request->input('email'),
                    'purpose' => $request->input('purpose'),
                    'remarks' => $request->input('remarks'),
                    'status' => $request->input('status'),
                    'releasedate' => '',
                ]);

                // Redirect to the dashboard or any other appropriate route
                return redirect('/admin/dashboard');
            } catch (ValidationException $e) {
                // If validation fails, redirect back with errors
                return redirect()->back()->withErrors($e->errors())->withInput();
            } catch (\Exception $e) {
                // Handle other exceptions if needed
                return redirect()->back()->withErrors([$e->getMessage()])->withInput();
            }
        }

    
}
