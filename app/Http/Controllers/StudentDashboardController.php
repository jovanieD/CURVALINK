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


class StudentDashboardController extends Controller
{
    // public function showStudentDashboard(){

    //     $certificationRequests = CertificationRequest::select('id' , 'document', 'created_at', 'status')->latest()->paginate(10);
    //     $goodMoralRequests = GoodMoralRequest::select('id', 'document', 'created_at', 'status')->latest()->paginate(10);
    //     $form137Requests = Form137Request::select('id', 'document', 'created_at', 'status')->latest()->paginate(10);
    
    //     $documentCounts = [
    //         'Pending' => 0,
    //         'Process' => 0,
    //         'Scheduled' => 0,
    //         'Received' => 0,
    //     ];
    
    //     $documentRequested = [];
    
    //     foreach($certificationRequests as $request){
    //         $documentRequested[] = [
    //             'type' => 'Certificate',
    //             'created_at' => $request->created_at,
    //             'status' => $request->status,
    //             'id' => $request->id
    //         ];
    //         $documentCounts[$request->status]++;
    //     }
    
    //     foreach($goodMoralRequests as $request){
    //         $documentRequested[] = [
    //             'type' => 'Good Moral',
    //             'created_at' => $request->created_at,
    //             'status' => $request->status,
    //             'id' => $request->id
    //         ];
    //         $documentCounts[$request->status]++;
    //     }
    
    //     foreach($form137Requests as $request){
    //         $documentRequested[] = [
    //             'type' => 'Form137',
    //             'created_at' => $request->created_at,
    //             'status' => $request->status,
    //             'id' => $request->id
    //         ];
    //         $documentCounts[$request->status]++;
    //     }
    
    //     // Sort the array by created_at in descending order
    //     usort($documentRequested, function($a, $b) {
    //         return strtotime($b['created_at']) - strtotime($a['created_at']);
    //     });
    
    //     return view('student.dashboard', [
    //         'documentRequested' => $documentRequested,
    //         'documentCounts' => $documentCounts,
    //     ]);
    // }

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
        $certificationRequests = $user->certificationRequests()->select('id', 'document', 'remarks', 'created_at', 'status')->get();
        $goodMoralRequests = $user->goodMoralRequests()->select('id', 'document', 'remarks', 'created_at', 'status')->get();
        $form137Requests = $user->form137Requests()->select('id', 'document', 'remarks', 'created_at', 'status')->get();
    
    
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
                'remarks' => $request->remarks,
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
            // Handle exceptions (e.g., document not found)
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
            // Handle exceptions (e.g., document not found)
            abort(404);
        }
    }

    public function deleteRequest(Request $request) {
        $request = $request->id;
        $data = CertificationRequest::find($request);
        $data->delete();
        return redirect('/dashboard');
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



    public function updateProfile(Request $request)
        {
            try {
                $user = User::find(Auth::user()->id);

                if (!$user) {
                    return response()->json(['error' => 'User not found'], 404);
                }

                $name = $request->input('name');
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
                        return redirect('/profile')->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                    }
                }

                $user->update([
                    'name' => $name,
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
