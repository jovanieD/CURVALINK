<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function logout(Request $request)
    {
        // Delete all sessions.
        $request->session()->invalidate();

        // Delete the user's Sanctum token.
        Auth::user()->tokens()->delete();

        // Redirect to the `/` route.
        return redirect('/');
    }
}
