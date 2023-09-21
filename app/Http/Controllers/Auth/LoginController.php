<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Admin;
use DB;
use Session;


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
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:teacher')->except('logout');
    }

    public function authenticate(Request $request){

        $credentials = $request->only('email', 'password');
        try {
            $email = $request->email;
            $password = $request->password;


            if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
                $user = User::where('email', $request->email)->first();

                if (!$user || !Hash::check($request->password, $user->password)) {
                    DB::rollBack(); // Roll back the transaction
                }

                $token = $user->createToken('my_app_token')->plainTextToken;

                $response = [
                    'user' => $user,
                    'token' => $token
                ];

                DB::commit(); // Commit the transaction

                return redirect('/');
            }elseif (Auth::guard('teacher')->attempt(['email' => $email, 'password' => $password])) {
                $user = Teacher::where('email', $request->email)->first();

                if (!$user || !Hash::check($request->password, $user->password)) {
                    DB::rollBack(); // Roll back the transaction
                }

                $token = $user->createToken('my_app_token')->plainTextToken;

                $response = [
                    'user' => $user,
                    'token' => $token
                ];

                DB::commit(); // Commit the transaction

                return redirect('/teacher');
            }elseif (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
                $user = Admin::where('email', $request->email)->first();

                if (!$user || !Hash::check($request->password, $user->password)) {
                    DB::rollBack(); // Roll back the transaction
                }

                $token = $user->createToken('my_app_token')->plainTextToken;

                $response = [
                    'user' => $user,
                    'token' => $token
                ];

                DB::commit(); // Commit the transaction

                return redirect('/admin');
            }
            DB::rollBack(); // Roll back the transaction
            return redirect('/login')->with('error', 'These credentials do not match our records.');
        } catch (ValidationException $e) {
            DB::rollBack(); // Roll back the transaction
            return redirect('/login')->with('message', 'Password should be 8 characters');
        } catch (Exception $e) {
            DB::rollBack(); // Roll back the transaction
            return redirect('/login')->with('error', 'An error occurred while logging in.');
        }

    }


    // public function showAdminLoginForm()
    // {
    //     return view('auth.login', ['url' => route('admin.login-view'), 'title'=>'Admin']);
    // }

    // public function adminLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (\Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
    //         return redirect()->intended('/admin/dashboard');
    //     }

    //     return back()->withInput($request->only('email', 'remember'));
    // }


    // public function showTeacherLoginForm()
    // {
    //     return view('auth.login', ['url' => route('teacher.login-view'), 'title'=>'Teacher']);
    // }

    // public function teacherLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (\Auth::guard('teacher')->attempt($request->only(['email','password']), $request->get('remember'))){
    //         return redirect()->intended('/teacher/dashboard');
    //     }

    //     return back()->withInput($request->only('email', 'remember'));
    // }




    // ----------------------------------------------------------------------------------------------------

    // public function show()
    // {
    //     return view('auth.login');
    // }

    // public function authenticate(){
    //     $this->validate($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);
    //     if (\Auth::guard('teacher')->attempt($request->only(['email','password']), $request->get('remember'))){
    //         return "teacher";
    //     }

    //     if (\Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
    //         return "admin";
    //     }

    // }
}