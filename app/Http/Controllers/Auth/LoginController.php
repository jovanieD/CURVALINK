<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;
use DB;
use Auth;
use Session;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Admin;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        return view('auth.login');
    }
    

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');

        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|alphanumeric_password',
        // ]);


        DB::beginTransaction();

        try {
            $email = $request->email;
            $password = $request->password;

            if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
                $user = User::where('email', $request->email)->first();

                if (!$user || !Hash::check($request->password, $user->password)) {
                    DB::rollBack(); // Roll back the transaction
                    Alert::error('Error Title', 'Error Message');

                }

                $token = $user->createToken('my_app_token')->plainTextToken;

                $response = [
                    'user' => $user,
                    'token' => $token
                ];

                DB::commit(); // Commit the transaction

                $script = "
                <script>
                    Swal.fire('This is a SweetAlert message from the controller!');
                </script>
            ";

                return redirect('/student');

            } elseif (Auth::guard('teacher')->attempt(['email' => $email, 'password' => $password])) {
                $teacher = Teacher::where('email', $request->email)->first();

                if (!$teacher || !Hash::check($request->password, $teacher->password)) {
                    DB::rollBack(); // Roll back the transaction
                    return redirect('/login')->with('error', 'These credentials do not match our records.');
                }

                $token = $teacher->createToken('my_app_token')->plainTextToken;

                $response = [
                    'user' => $teacher,
                    'token' => $token
                ];

                DB::commit(); // Commit the transaction

                return "teacher";
            } elseif (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
                $admin = Admin::where('email', $request->email)->first();

                if (!$admin || !Hash::check($request->password, $admin->password)) {
                    DB::rollBack(); // Roll back the transaction
                    return redirect('/login')->with('error', 'These credentials do not match our records.');
                }

                $token = $admin->createToken('my_app_token')->plainTextToken;

                $response = [
                    'user' => $admin,
                    'token' => $token
                ];

                DB::commit(); // Commit the transaction

                return "admin";
            }

            // If no authentication guard is successful, return an error message
            DB::rollBack(); // Roll back the transaction
            Alert::error('Error Title', 'Error Message');
            return redirect('/login')->with('error', 'These credentials do not match our records.');
        } catch (ValidationException $e) {
            DB::rollBack(); // Roll back the transaction
            Alert::error('Error Title', 'Error Message');
            return redirect('/login')->with('message', 'Password should be 8 characters');
        } catch (Exception $e) {
            DB::rollBack(); // Roll back the transaction
            Alert::error('Error Title', 'Error Message');
            return redirect('/login')->with('error', 'An error occurred while logging in.');
        }

}
}
