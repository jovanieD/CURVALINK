<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcomecheck(Request $request)
    {
        // if (Auth::guard('admin')->check()) {
        //     return view('admin.admin');
        // }elseif (Auth::guard('teacher')->check()){
        //     return view('teacher.teacher');
        // }else
        return view('welcome');
    
    }
}
