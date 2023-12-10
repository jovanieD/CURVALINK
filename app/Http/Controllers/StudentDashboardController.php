<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;


use Mail;
use App\Models\User;
use Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Response;


class StudentDashboardController extends Controller
{

    public function profileImage()
    {
        $user = Auth::user();

        if ($user && strpos($user->profile_image, '/storage') !== false) {
            $imagePath = public_path($user->profile_image);

            if (file_exists($imagePath)) {
                $headers = [
                    'Content-Type' => 'image/jpeg',
                ];

                return Response::file($imagePath, $headers);
            }
        }

        $defaultImagePath = public_path(Auth::user()->profile_image);
        $headers = [
            'Content-Type' => 'image/jpeg',
        ];

        return Response::file($defaultImagePath, $headers);
    }
 

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
        $user = Auth::user();

        // Assuming the user has a relationship with document requests
        $certificationRequests = $user->certificationRequests()->select('id', 'document', 'releasedate', 'remarks', 'created_at', 'status')->get();
        $goodMoralRequests = $user->goodMoralRequests()->select('id', 'document', 'remarks', 'releasedate', 'created_at', 'status')->get();
        $form137Requests = $user->form137Requests()->select('id', 'document', 'remarks', 'releasedate', 'created_at', 'status')->get();
    
    
        $documentCounts = [
            'Pending' => 0,
            'Process' => 0,
            'Scheduled' => 0,
            'Decline' => 0,
        ];

    
        $documentRequested = [];
    
        foreach($certificationRequests as $request){
            $documentRequested[] = [
                'type' => 'Certificate',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id
            ];
            $documentCounts[$request->status]++;
        }
    
        foreach($goodMoralRequests as $request){
            $documentRequested[] = [
                'type' => 'Good_Moral',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id
            ];
            $documentCounts[$request->status]++;
        }
    
        foreach($form137Requests as $request){
            $documentRequested[] = [
                'type' => 'Form137',
                'releasedate' => $request->releasedate,
                'remarks' => $request->remarks,
                'created_at' => $request->created_at,
                'status' => $request->status,
                'id' => $request->id
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
    
        return view('student.dashboard', [
            'documentRequested' => $paginatedRequests,
            'documentCounts' => $documentCounts,
        ]);
    }
    

    public function getRequest(Request $request)
    {
        try {
            $id = $request->input('id');
            $type = $request->input('type');

            switch ($type) {
                case 'Certificate':
                    $data = CertificationRequest::find($id);
                    return view('actions.edit-certificate')->with('data', $data);
                case 'Good_Moral':
                    $data = GoodMoralRequest::find($id);
                    return view('actions.edit-goodmoral')->with('data', $data);
                case 'Form137':
                    $data = Form137Request::find($id);
                    return view('actions.edit-form137')->with('data', $data);
                default:
                    abort(404);
            }

        } catch (\Exception $e) {
            abort(404);
        }
    }


    public function viewRequest(Request $request)
    {
        try {
            $id = $request->input('id');
            $type = $request->input('type');

            switch ($type) {
                case 'Certificate':
                    $data = CertificationRequest::find($id);
                    return view('actions.view-certificate')->with('data',  $data);
                case 'Good_Moral':
                    $requestModel = GoodMoralRequest::find($id);
                    return view('actions.view-goodmoral')->with('data', $requestModel);
                case 'Form137':
                    $requestModel = Form137Request::find($id);
                    return view('actions.view-form137')->with('data', $requestModel);
                default:
                    abort(404); 
            }
            
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function deleteRequest(Request $request) {
        $request = $request->id;
        $data = CertificationRequest::find($request);
        $data->delete();
        return redirect('/dashboard');
    }

    public function settings()
    {
        return view('student.settings');
    }

    public function profile()
    {
        $user = Auth::user();

        $firstname = $user->firstname;
        $middlename = $user->middlename;
        $lastname = $user->lastname;
        $email = $user->email;
        $idnumber = $user->idnumber;
        $gender = $user->gender;
        $gradelevel = $user->gradelevel;
        $address = $user->address;
        $municipality = $user->municipality;
        $province = $user->province;
        $phonenumber = $user->phonenumber;
        $profile_image = $user->profile_image;
    
        // Pass the information to the view
        return view('student.profile', compact(
            'firstname',
            'middlename',
            'lastname',
            'email',
            'idnumber',
            'gender',
            'gradelevel',
            'address',
            'municipality',
            'province',
            'phonenumber',
            'profile_image'
        ));
    }

    public function updateProfile(Request $request)
        {
            try {
                $user = User::find(Auth::user()->id);

                if (!$user) {
                    return response()->json(['error' => 'User not found'], 404);
                }
                
                $idnumber = $request->input('idnumber');
                $middlename = $request->input('middlename');
                $firstname = $request->input('firstname');
                $lastname = $request->input('lastname');
                $gender = $request->input('gender');
                $gradelevel = $request->input('gradelevel');
                $email = $request->input('email');
                $phonenumber = $request->input('phonenumber');
                $address = $request->input('address');
                $municipality = $request->input('municipality');
                $province = $request->input('province');
                $imageName = $user->profile_image; 

                if ($request->hasFile('profile_picture')) {
                    $profilePicture = $request->file('profile_picture');
                
                    if ($profilePicture->isValid()) {
                        $imageName = $profilePicture->hashName();
                        
                        $profilePicture->move(public_path('profiles'), $imageName);
                
                    } else {
                        return redirect('/profile')->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                    }
                }

                $user->update([
                    'first' => $firstname,
                    'middlename' => $middlename,
                    'idnumber' => $idnumber,
                    'lastname' => $lastname,
                    'gender' => $gender,
                    'gradelevel' => $gradelevel,
                    'email' => $email,
                    'phonenumber' => $phonenumber,
                    'address' => $address,
                    'municipality' => $municipality,
                    'province' => $province,
                    'profile_image' => $imageName,
                ]);

                return redirect('/profile')->with('success', 'Profile information updated successfully');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred while updating the profile: ' . $e->getMessage());
            }
        }

        public function updatePassword(Request $request)
        {
            try {
                $request->validate([
                    'current' => 'required',
                    'new' => [
                        'required',
                        'min:8',
   
                    ],
                ]);
        
                $user = Auth::user();
        
                if (!Hash::check($request->input('current'), $user->password)) {
                    $errors = ['current' => 'The current password is incorrect.'];
                    return redirect()->back()->withErrors($errors);
                }
        
                $user->update([
                    'password' => bcrypt($request->input('new')),
                ]);
        
                return redirect()->back()->with('success', 'Password updated successfully!');
            } catch (ValidationException $validationException) {
                return redirect()->back()->withErrors($validationException->errors())->withInput();
            } catch (\Exception $exception) {
                return redirect()->back()->with('error', $exception->getmessage());
            }
        }


        public function deleteUser()
        {
            $user = Auth::user();
        
            // Logout the user
            Auth::logout();
        
            // Clear session cookies
            Session::flush();
            Session::regenerate();
        
            // Delete the user
            $user->delete();
        
            return redirect('/')->with('success', 'User and related records deleted successfully.');
        }


}
