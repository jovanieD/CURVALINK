<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\Form137Request;
use Auth;


class Form137RequestController extends Controller
{

    public function showForm137Form(){
        return view('student.request-form137');
    }


    public function createNewForm137Request(Request $request)
        {
            try {
                // Validation rules
                $validationRules = [
                    'principalname' => 'required|string|max:255',
                    'name' => 'required|string|max:255',
                    'grade' => 'required|string|max:255',
                    'schoolyear' => 'required|string|max:255',
                    'adviser' => 'required|string|max:255',
                    'requestorname' => 'required|string|max:255',
                    'request' => 'required|string|max:255',
                ];

                // Validate the request
                $request->validate($validationRules);

                // Create a new Request
                $newRequest = Form137Request::create([
                    'user_id' => Auth::user()->id,
                    'principalname' => $request->input('principalname'),
                    'name' => $request->input('name'),
                    'grade' => $request->input('grade'),
                    'schoolyear' => $request->input('schoolyear'),
                    'adviser' => $request->input('adviser'),
                    'requestorname' => $request->input('requestorname'),
                    'request' => $request->input('request'),
                ]);

                // Redirect to the dashboard or any other appropriate route
                return redirect('dashboard');
            } catch (ValidationException $e) {
                // If validation fails, redirect back with errors
                return redirect()->back()->withErrors($e->errors())->withInput();
            }
        }


        public function updateForm137Request(Request $request, $id)
        {
            try {
                // Validation rules
                $validationRules = [
                    'principalname' => 'required|string|max:32',
                    'name' => 'required|string|max:64',
                    'grade' => 'required|string|max:32',
                    'schoolyear' => 'required|string|max:32',
                    'adviser' => 'required|string|max:32',
                    'requestorname' => 'required|string|max:32',
                    'request' => 'required|string|max:32',
                ];

                // Validate the request
                $request->validate($validationRules);

                // Find the existing record by id
                $existingRequest = Form137Request::findOrFail($id);

                // Update the existing record
                $existingRequest->update([
                    'principalname' => $request->input('principalname'),
                    'name' => $request->input('name'),
                    'grade' => $request->input('grade'),
                    'schoolyear' => $request->input('schoolyear'),
                    'adviser' => $request->input('adviser'),
                    'requestorname' => $request->input('requestorname'),
                    'request' => $request->input('request'),
                    
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

        public function updateForm137(Request $request, $id)
        {
            try {
                // Validation rules
                $validationRules = [
                    'principalname' => 'required|string|max:32',
                    'name' => 'required|string|max:64',
                    'grade' => 'required|string|max:32',
                    'schoolyear' => 'required|string|max:32',
                    'adviser' => 'required|string|max:32',
                    'requestorname' => 'required|string|max:32',
                    'request' => 'required|string|max:32',
                    'status' => 'required|string|max:32',
                    'status' => 'required|string|max:32',
                ];

                // Validate the request
                $request->validate($validationRules);

                // Find the existing record by id
                $existingRequest = Form137Request::findOrFail($id);

                // Update the existing record
                $existingRequest->update([
                    'principalname' => $request->input('principalname'),
                    'name' => $request->input('name'),
                    'grade' => $request->input('grade'),
                    'schoolyear' => $request->input('schoolyear'),
                    'adviser' => $request->input('adviser'),
                    'requestorname' => $request->input('requestorname'),
                    'request' => $request->input('request'),
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

        public function adminUpdateForm137(Request $request, $id)
        {
            try {
                // Validation rules
                $validationRules = [
                    'principalname' => 'required|string|max:32',
                    'name' => 'required|string|max:64',
                    'grade' => 'required|string|max:32',
                    'schoolyear' => 'required|string|max:32',
                    'adviser' => 'required|string|max:32',
                    'requestorname' => 'required|string|max:32',
                    'request' => 'required|string|max:32',
                    'status' => 'required|string|max:32',
                    'status' => 'required|string|max:32',
                ];

                // Validate the request
                $request->validate($validationRules);

                // Find the existing record by id
                $existingRequest = Form137Request::findOrFail($id);

                // Update the existing record
                $existingRequest->update([
                    'principalname' => $request->input('principalname'),
                    'name' => $request->input('name'),
                    'grade' => $request->input('grade'),
                    'schoolyear' => $request->input('schoolyear'),
                    'adviser' => $request->input('adviser'),
                    'requestorname' => $request->input('requestorname'),
                    'request' => $request->input('request'),
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
