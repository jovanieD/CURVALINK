<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CertificationRequest;
use App\Models\GoodMoralRequest;
use App\Models\Form137Request;

use Auth;

use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Schedule;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Mail;
use App\Mail\CreateAccount;

use Illuminate\Support\Facades\Response;

class ManageUsersController extends Controller
{
    public function showAllUsers()
    {
        $userRequests = User::select(
            'id',
            'idnumber',
            'firstname',
            'lastname',
            'gradelevel',
            'gender',
            'phonenumber',
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
    
        $paginatedRequests = $paginatedRequests->withQueryString();
    
        return view('admin.allusers', [
            'user' => $paginatedRequests,
        ]);
    }
    

    public function showUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        return view('admin.viewUser', ['user' => $user]);
    }

    public function updateUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        return view('admin.updateUser', ['user' => $user]);
    }

    public function adminUpdateUser(Request $request, $id){
        try {

            $user = User::find($id);

            $idnumber = $request->input('idnumber');
            $gradelevel = $request->input('gradelevel');
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $gender = $request->input('gender');
            $phonenumber = $request->input('phonenumber');
            $address = $request->input('address');
            $municipality = $request->input('municipality');
            $province = $request->input('province');


            $user->update([
                'idnumber' => $idnumber,
                'gradelevel' => $gradelevel,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'gender' => $gender,
                'phonenumber' => $phonenumber,
                'address' => $address,
                'municipality' => $municipality,
                'province' => $province,
            ]);

            return redirect('/all_Users')->with('success', 'Profile information updated successfully');
        } catch (\Exception $e) {
            return redirect('/all_Users')->with('error', 'An error occurred while updating the profile' );
        }
    }

    public function delete($id)
    {
        try {
            $user = User::findOrFail($id);

            \DB::transaction(function () use ($user) {

                $user->goodMoralRequests()->delete(); 
                $user->certificationRequests()->delete(); 
                $user->form137Requests()->delete(); 
                $user->schedules()->delete(); 
                $user->delete();
            });

            return redirect('/all_Users')->with('success', 'User and related data deleted successfully');
        } catch (ModelNotFoundException $e) {
            return redirect('/all_Users')->with('error', 'User not found');
        } catch (QueryException $e) {
            return redirect('/all_Users')->with('error', 'Error deleting user and related data');
        } catch (\Exception $e) {
            return redirect('/all_Users')->with('error', 'An unexpected error occurred');
        }

    }

    public function search(Request $request)
    {
        $name = $request->input('name');

        $query = User::where(function ($query) use ($name) {
            $query->where('firstname', 'LIKE', '%' . $name . '%')
                ->orWhere('middlename', 'LIKE', '%' . $name . '%')
                ->orWhere('lastname', 'LIKE', '%' . $name . '%');
        });

        $user = $query->paginate(10); 

        return view('admin.allusers', ['user' => $user]);
    }


    public function showadduser(){
        return view('admin.addUser');
    }


    public function createUser(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'idnumber' => 'nullable', 
                'middlename' => 'nullable',
                'gender' => 'nullable',
                'gradelevel' => 'nullable',
                'phonenumber' => 'nullable',
                'address' => 'nullable',
                'municipality' => 'nullable',
                'province' => 'nullable',
            ]);
        
            $idnumber = $request->input('idnumber');
            $firstname = $request->input('firstname');
            $middlename = $request->input('middlename');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $gender = $request->input('gender');
            $gradelevel = $request->input('gradelevel');
            $phonenumber = $request->input('phonenumber');
            $address = $request->input('address');
            $municipality = $request->input('municipality');
            $province = $request->input('province');
        
            User::updateOrCreate(
                [
                    'email' => $email,
                    'idnumber' => $idnumber,
                    'firstname' => $firstname,
                    'middlename' => $middlename,
                    'lastname' => $lastname,
                    'gender' => $gender,
                    'gradelevel' => $gradelevel,
                    'phonenumber' => $phonenumber,
                    'address' => $address,
                    'municipality' => $municipality,
                    'province' => $province,
                    'password' => '$2y$10$zu/uskLIl.VKZnFluiBDWO82cAM8gBM/FcGjlEu6eHvcUxb9GATYW', // P@$$word
                    'profile_image' => '/images/avatar.png',
                ]
            );

            Mail::to($email)->send(new CreateAccount( $email, $password ));
        
            DB::commit();
        
            return redirect('/all_Users');
        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect('/admin_add_user')->with('error', 'Validation failed. Please check your input and try again.');
        } catch (QueryException $e) {
            // Handle database query errors
            DB::rollBack();
            return redirect('/admin_add_user')->with('error', 'User creation failed. Please try again.');
        } catch (\Exception $e) {
            // Handle other general exceptions
            DB::rollBack();
            return redirect('/admin_add_user')->with('error', 'An unexpected error occurred. Please try again.');
        }
        
    }

}