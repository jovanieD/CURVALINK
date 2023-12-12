<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use App\Models\Schedule;

use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use App\Mail\CreateAccount;


class ManageAdminsController extends Controller
{
    public function showAllAdmins()
    {
        {
            $userRequests = Admin::select(
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
    
            return view('admin.alladmins', [
                'admin' => $paginatedRequests,
            ]);
        }
    }

    public function search(Request $request)
    {
        $name = $request->input('name');

        $query = Admin::where(function ($query) use ($name) {
            $query->where('firstname', 'LIKE', '%' . $name . '%')
                ->orWhere('middlename', 'LIKE', '%' . $name . '%')
                ->orWhere('lastname', 'LIKE', '%' . $name . '%');
        });

        $admin = $query->paginate(10); 

        return view('admin.alladmins', [
            'admin' => $admin,
        ]);
    }


    public function showaddteacher(){
        return view('admin.addadmin');
    }


    private function generateUniquePassword($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
    
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $password .= $characters[$index];
        }
    
        return $password;
    }

    public function createAdmin(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required',
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

            $password = $this->generateUniquePassword();
            
        
            Mail::to($email)->send(new CreateAccount( $email, $password ));

            $hashpassword = Hash::make($password);

            DB::beginTransaction();

            Admin::create([
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
                'password' => $hashpassword,
                'profile_image' => '/images/avatar.png',
            ]);

            DB::commit();

            return redirect('/all_Admins');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Admin creation failed. Please try again.');
        }
    }


    public function showOnlyAdmin($id){
        $Admin = Admin::find($id);

        if (!$Admin) {
            return redirect()->back()->with('error', 'Admin not found');
        }
        return view('admin.viewAdmin', ['Admin' => $Admin]);
    }
    
    public function updateAdmin($id){
        $Admin= Admin::find($id);

        if (!$Admin) {
            return redirect()->back()->with('error', 'Admin not found');
        }
        return view('admin.updateAdmin', ['Admin' => $Admin]);
    }

    public function adminUpdateAdmin(Request $request, $id){
        try {

            $user = Admin::find($id);

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

            return redirect('/all_Admins')->with('success', 'Profile information updated successfully');
        } catch (\Exception $e) {
            return redirect('/all_Admins')->with('error', 'An error occurred while updating the profile' );
        }
    }


    public function delete($id)
    {
        try {
            $user = Admin::findOrFail($id);

            \DB::transaction(function () use ($user) {

                // $user->goodMoralRequests()->delete(); 
                // $user->certificationRequests()->delete(); 
                // $user->form137Requests()->delete(); 
                // $user->schedules()->delete(); 
                $user->delete();
            });

            return redirect('/all_Admins')->with('success', 'User and related data deleted successfully');
        } catch (ModelNotFoundException $e) {
            return redirect('/all_Admins')->with('error', 'User not found');
        } catch (QueryException $e) {
            return redirect('/all_Admins')->with('error', 'Error deleting user and related data');
        } catch (\Exception $e) {
            return redirect('/all_Admins')->with('error', 'An unexpected error occurred');
        }

    }
}
