<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Teacher;
use App\Models\Schedule;

use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Response;

class ManageTeachersController extends Controller
{
    public function showAllTeachers()
    {
        {
            $userRequests = Teacher::select(
                'id',
                'firstname',
                'rank',
                'lastname',
                'phonenumber',
                'subject_handle',
                'grade_level',
                'gender',
                'email',
                'address',
                'created_at'
            )->get();
    
            $allRequests = collect($userRequests);
    
            $sortedRequests = $allRequests->sortByDesc('created_at');
    
            $currentPage = request()->get('page', 1);
            $perPage = 10;
    
            $paginatedRequests = new \Illuminate\Pagination\LengthAwarePaginator(
                $sortedRequests->forPage($currentPage, $perPage),
                $sortedRequests->count(),
                $perPage,
                $currentPage
            );
    
            return view('admin.allteachers', [
                'teacher' => $paginatedRequests,
            ]);
        }
    }

    public function showTeacher($id)
    {
        $Teacher = Teacher::find($id);

        if (!$Teacher) {
            return redirect()->back()->with('error', 'Teacher not found');
        }
        return view('admin.viewTeacher', ['Teacher' => $Teacher]);
    }

    public function updateTeacher($id)
    {
        $Teacher = Teacher::find($id);

        if (!$Teacher) {
            return redirect()->back()->with('error', 'Teacher not found');
        }
        return view('admin.updateTeacher', ['Teacher' => $Teacher]);
    }

    public function adminUpdateTeacher(Request $request, $id){
        try {

            $user = Teacher::find($id);

            $rank = $request->input('rank');
            $subject_handle = $request->input('subject_handle');
            $grade_level = $request->input('grade_level');
            $firstname = $request->input('firstname');
            $middlename = $request->input('middlename');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $gender = $request->input('gender');
            $phonenumber = $request->input('phonenumber');
            $address = $request->input('address');
            $municipality = $request->input('municipality');
            $province = $request->input('province');


            $user->update([
                'rank' => $rank,
                'subject_handle' => $subject_handle,
                'grade_level' => $grade_level,
                'firstname' => $firstname,
                'middlename' => $middlename,
                'lastname' => $lastname,
                'email' => $email,
                'gender' => $gender,
                'phonenumber' => $phonenumber,
                'address' => $address,
                'municipality' => $municipality,
                'province' => $province,
            ]);

            return redirect('/all_Teachers')->with('success', 'Profile information updated successfully');
        } catch (\Exception $e) {
            // return redirect('/all_Users')with('error', 'An error occurred while updating the profile: ' );
        }
    }

    public function delete($id)
    {
        try {
            $user = Teacher::findOrFail($id);

            \DB::transaction(function () use ($user) {

                // $user->goodMoralRequests()->delete(); 
                // $user->certificationRequests()->delete(); 
                // $user->form137Requests()->delete(); 
                // $user->schedules()->delete(); 
                $user->delete();
            });

            return redirect('/all_Teachers')->with('success', 'User and related data deleted successfully');
        } catch (ModelNotFoundException $e) {
            return redirect('/all_Teachers')->with('error', 'User not found');
        } catch (QueryException $e) {
            return redirect('/all_Teachers')->with('error', 'Error deleting user and related data');
        } catch (\Exception $e) {
            return redirect('/all_Teachers')->with('error', 'An unexpected error occurred');
        }

    }


    public function search(Request $request)
    {
        $name = $request->input('name');

        $query = Teacher::where(function ($query) use ($name) {
            $query->where('firstname', 'LIKE', '%' . $name . '%')
                ->orWhere('middlename', 'LIKE', '%' . $name . '%')
                ->orWhere('lastname', 'LIKE', '%' . $name . '%');
        });

        $teaches = $query->paginate(10); 

        return view('admin.allteachers', ['teacher' => $teaches]);
    }

    public function showaddteacher(){
        return view('admin.addTeacher');
    }

    public function createTeacher(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|email',
                'firstname' => 'required',
                'lastname' => 'required',
                'rank' => 'nullable',
                'subject_handle' => 'nullable',
                'grade_level' => 'nullable',
                'middlename' => 'nullable',
                'gender' => 'nullable',
                'phonenumber' => 'nullable',
                'address' => 'nullable',
                'municipality' => 'nullable',
                'province' => 'nullable',
            ]);

            $rank = $request->input('rank');
            $subject_handle = $request->input('subject_handle');
            $grade_level = $request->input('grade_level');
            $firstname = $request->input('firstname');
            $middlename = $request->input('middlename');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $gender = $request->input('gender');
            $phonenumber = $request->input('phonenumber');
            $address = $request->input('address');
            $municipality = $request->input('municipality');
            $province = $request->input('province');

            DB::beginTransaction();

            Teacher::create([
                'rank' => $rank,
                'subject_handle' => $subject_handle,
                'grade_level' => $grade_level,
                'firstname' => $firstname,
                'middlename' => $middlename,
                'lastname' => $lastname,
                'email' => $email,
                'gender' => $gender,
                'phonenumber' => $phonenumber,
                'address' => $address,
                'municipality' => $municipality,
                'province' => $province,
                'password' => '$2y$10$zu/uskLIl.VKZnFluiBDWO82cAM8gBM/FcGjlEu6eHvcUxb9GATYW', // P@$$word
                'profile_image' => '/images/avatar.png',
            ]);

            DB::commit();

            return redirect('/all_Teachers');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Teacher creation failed. Please try again.');
        }
    }



}
