<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;

use Auth;

use App\Models\Teacher;
use App\Models\Schedule;
use App\Models\Admin;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Response;

class AdminDashboardController extends Controller
{

    public function adminprofileimage()
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

    public function showAdminDashboard(){
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

        return view('admin.dashboard', [
            'documentRequested' => $paginatedRequests,
            'documentCounts' => $documentCounts,
        ]);
    }

    public function showschedule(){
        return view('admin.schedule');
    }

    public function getallschedule()
    {
        $schedules = Schedule::all();
        return $schedules;

    }

    public function settings(){
        return view('admin.settings');
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
            return redirect()->back()->withErrors( $exception->getmessage());
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

    public function showProfile(){
        return view('admin.profile');
    }

    public function editProfile(){
        return view('admin.updateProfile');
    }

    public function updateProfile(Request $request)
    {
        try {
            $user = Admin::find(Auth::user()->id);

            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }

            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $gender = $request->input('gender');
            $rank = $request->input('rank');
            $subject_handle = $request->input('subject_handle');
            $grade_level = $request->input('grade_level');
            $email = $request->input('email');
            $phonenumber = $request->input('phonenumber');
            $address = $request->input('address');
            $municipality = $request->input('municipality');
            $province = $request->input('province');
            $imageName = $user->profile_image; 

            if ($request->hasFile('profile_picture')) {
                $profilePicture = $request->file('profile_picture');
            
                if ($profilePicture->isValid()) {
                    if ($imageName && file_exists(public_path('admins/' . $imageName))) {
                        unlink(public_path('admins/' . $imageName));
                    }
            
                    $imageName = '/admins/' . $profilePicture->hashName();
                    $profilePicture->move(public_path('admins'), $imageName);
                } else {
                    return redirect('/admin/profile')->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }

            $user->update([
                'firstname' => $firstname,
                'middlename' => $middlename,
                'lastname' => $lastname,
                'gender' => $gender,
                'rank' => $rank,
                'subject_handle' => $subject_handle,
                'grade_level' => $grade_level,
                'email' => $email,
                'phonenumber' => $phonenumber,
                'address' => $address,
                'municipality' => $municipality,
                'province' => $province,
                'profile_image' => $imageName,
            ]);

            return redirect('/admin/profile')->with('success', 'Profile information updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the profile');
        }
    }


    // requestss


    public function viewRequest( Request $request)
        {
            try {
                $type = $request->input('type');
                $id = $request->input('id');
        
                switch ($type) {
                    case 'Certificate':
                        $data = CertificationRequest::find($id);
                        return view('admin.actions.view-certificate')->with('data',  $data);
                    case 'Good_Moral':
                        $data = GoodMoralRequest::find($id);
                        return view('admin.actions.view-goodmoral')->with('data', $data);
                    case 'Form137':
                        $data = Form137Request::find($id);
                        return view('admin.actions.view-form137')->with('data', $data);
                    default:
                        abort(404); 
                }
        
            } catch (\Exception $e) {
                abort(404);
            }
        }


        public function getRequest(Request $request)
        {
            try {
                $id = $request->input('id');
                $type = $request->input('type');
    
                switch ($type) {
                    case 'Certificate':
                        $data = CertificationRequest::find($id);
                        return view('admin.actions.edit-certificate')->with('data', $data);
                    case 'Good_Moral':
                        $data = GoodMoralRequest::find($id);
                        return view('admin.actions.edit-goodmoral')->with('data', $data);
                    case 'Form137':
                        $data = Form137Request::find($id);
                        return view('admin.actions.edit-form137')->with('data', $data);
                    default:
                        abort(404);
                }
    
            } catch (\Exception $e) {
                abort(404);
            }
        }

        public function getRequestorProfile($userId)
        {
            $requestor = User::find($userId);
            return view('admin.requestorprofile', [
                'requestor' => $requestor,
        ]);
    }

   
}
