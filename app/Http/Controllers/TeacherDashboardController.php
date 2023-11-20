<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;

use Auth;

use App\Models\Teacher;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;



class TeacherDashboardController extends Controller
{
    public function showTeacherDashboard(){

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
                    return redirect('/teacher/profile')->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
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
    
}
