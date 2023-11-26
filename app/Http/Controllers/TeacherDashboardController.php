<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;

use Auth;
use User;

use App\Models\Teacher;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Response;

class TeacherDashboardController extends Controller
{

    public function showhome(){
            return view('teacher.home-teacher');
    }

    public function teacherprofileimage()
    {
        $user = Auth::user();

        if ($user && $user->profile_image) {
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
 
    public function showTeacherDashboard()
    {
        $certificationRequests = CertificationRequest::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->get();
        $goodMoralRequests = GoodMoralRequest::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->get();
        $form137Requests = Form137Request::select('id', 'document', 'remarks', 'created_at', 'status', 'releasedate', 'user_id')->get();

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

        return view('teacher.dashboard', [
            'documentRequested' => $paginatedRequests,
            'documentCounts' => $documentCounts,
        ]);
    }


        public function showProfile(){
            return view('teacher.profile');
        }

        public function editProfile(){
            return view('teacher.updateProfile');
        }

    public function updateProfile(Request $request)
    {
        try {
            $user = Teacher::find(Auth::user()->id);

            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }

            $middlename = $request->input('middlename');
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $phonenumber = $request->input('phonenumber');
            $address = $request->input('address');
            $municipality = $request->input('municipality');
            $province = $request->input('province');
            $imageName = $user->profile_image; // Initialize with the current image name

            if ($request->hasFile('profile_picture')) {
                $profilePicture = $request->file('profile_picture');

                // Ensure that the file is an image
                if ($profilePicture->isValid() ) {
                    $image = $profilePicture->hashName();
                    $imageName = '/storage/images/' . $image;

                    $profilePicture->storeAs('public/images', $image);
                } else {
                    return redirect('/teacher/profile')->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }

            $user->update([
                'first' => $firstname,
                'middlename' => $middlename,
                'lastname' => $lastname,
                'email' => $email,
                'phonenumber' => $phonenumber,
                'address' => $address,
                'municipality' => $municipality,
                'province' => $province,
                'profile_image' => $imageName,
            ]);

            return redirect('/teacher/profile')->with('success', 'Profile information updated successfully');
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
                throw ValidationException::withMessages(['current' => 'The current password is incorrect.']);
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

    public function settings(){
        return view('teacher.settings');
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

        public function getRequest(Request $request)
        {
            try {
                $id = $request->input('id');
                $type = $request->input('type');
    
                switch ($type) {
                    case 'Certificate':
                        $data = CertificationRequest::find($id);
                        return view('teacher.actions.edit-certificate')->with('data', $data);
                    case 'Good_Moral':
                        $data = GoodMoralRequest::find($id);
                        return view('teacher.actions.edit-goodmoral')->with('data', $data);
                    case 'Form137':
                        $data = Form137Request::find($id);
                        return view('teacher.actions.edit-form137')->with('data', $data);
                    default:
                        abort(404);
                }
    
            } catch (\Exception $e) {
                abort(404);
            }
        }
    
    
        public function viewRequest( Request $request)
        {
            try {
                $type = $request->input('type');
                $id = $request->input('id');
        
                switch ($type) {
                    case 'Certificate':
                        $data = CertificationRequest::find($id);
                        return view('teacher.actions.view-certificate')->with('data',  $data);
                    case 'Good_Moral':
                        $requestModel = GoodMoralRequest::find($id);
                        return view('teacher.actions.view-goodmoral')->with('data', $requestModel);
                    case 'Form137':
                        $requestModel = Form137Request::find($id);
                        return view('teacher.actions.view-form137')->with('data', $requestModel);
                    default:
                        abort(404); 
                }
        
            } catch (\Exception $e) {
                abort(404);
            }
        }


        public function showschedule(){
            return view('teacher.schedule');
        }
        
    
}
