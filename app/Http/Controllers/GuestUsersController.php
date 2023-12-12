<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Teacher;
use App\Models\User;

use App\Models\Announcement;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotEmail;

class GuestUsersController extends Controller
{

    public function tologin(){
        return redirect('/login');
    }

    public function getcertificate(){
        if (auth()->check()) {
            return redirect('/request/certificate');
        } else {
            return redirect('/login');
        }
    }

    public function getgoodmoral(){
        if (auth()->check()) {
            return redirect('/request/goodmoral');
        } else {
            return redirect('/login');
        }
    }

    public function getform(){
        if (auth()->check()) {
            return redirect('/request/form137');
        } else {
            return redirect('/login');
        }
    }


    public function  index(){

        $latestEvents = Event::latest()->take(3)->get();


        return view('welcome', compact('latestEvents'));
    }

    public function  showabout(){
        return view('about.about');
    }

    public function  showoffers(){
        return view('offer.offer');
    }

    public function  showannouncement(){

        $allAnnouncement = Announcement::latest()->get();

        $currentPage = request()->get('page', 1); 
        $perPage = 4;  
        $paginatedAnnouncement = new \Illuminate\Pagination\LengthAwarePaginator(
            $allAnnouncement->forPage($currentPage, $perPage),
            $allAnnouncement->count(),
            $perPage,
            $currentPage
        );

        $latestAnnouncement = $allAnnouncement->take(1);
        return view('announcement.announcement', compact('latestAnnouncement', 'paginatedAnnouncement'));
    }

    public function searchAnnouncement(Request $request){

        $name = $request->input('name');

        $query = Announcement::where(function ($query) use ($name) {
            $query->where('title', 'LIKE', '%' . $name . '%');
        });

        $allAnnouncement = Announcement::latest()->get();

        $currentPage = request()->get('page', 1); 
        $perPage = 4;  
        $paginatedAnnouncement = new \Illuminate\Pagination\LengthAwarePaginator(
            $allAnnouncement->forPage($currentPage, $perPage),
            $allAnnouncement->count(),
            $perPage,
            $currentPage
        );

        $latestAnnouncement = $query->paginate(1); 
        return view('announcement.announcement', compact('latestAnnouncement', 'paginatedAnnouncement'));
    }

    

    public function showevent()
    {
        
        $allEvents = Event::latest()->get();
    
        $currentPage = request()->get('page', 1); 
        $perPage = 9;  
        $paginatedEvents = new \Illuminate\Pagination\LengthAwarePaginator(
            $allEvents->forPage($currentPage, $perPage),
            $allEvents->count(),
            $perPage,
            $currentPage
        );
    
        $latestEvents = $allEvents->take(4);
    
        return view('event.event', compact('latestEvents', 'paginatedEvents'));
    }

    public function searchEvent(Request $request)
    {
        $name = $request->input('name');

        $query = Event::where(function ($query) use ($name) {
            $query->where('title', 'LIKE', '%' . $name . '%');
        });

        $allEvents = Event::latest()->get();
    
        $currentPage = request()->get('page', 1); 
        $perPage = 9;  
        $paginatedEvents = new \Illuminate\Pagination\LengthAwarePaginator(
            $allEvents->forPage($currentPage, $perPage),
            $allEvents->count(),
            $perPage,
            $currentPage
        );

        $latestEvents = $query->paginate(10); 

        return view('event.event', compact('latestEvents', 'paginatedEvents'));
    }
    


    public function  showcontact(){
        return view('contact.contact');
    }

    public function showforgot(){
        return view('auth.forgotpassword');
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

    public function forgotpassword(Request $request){
        try {
            $email = $request->input('email');
    
            $teacher = Teacher::where('email', $email)->first();
            $user = User::where('email', $email)->first();
    
            if ($teacher || $user) {

                $password = $this->generateUniquePassword();

                if ($teacher) {
                    $teacher->update(['password' => Hash::make($password)]);
                } else {
                    $user->update(['password' => Hash::make($password)]);
                }
    
                Mail::to($email)->send(new ForgotEmail( $email, $password ));
                $responseMessage = 'Password reset email sent. Please check your email.';
                $responseType = 'alert-success';
            } else {
                $responseMessage = 'This email does not belong to any users.';
                $responseType = 'alert-danger';
            }
        } catch (\Exception $e) {
            $responseMessage = 'An error occurred while processing your request.';
            $responseType = 'alert-danger';
        }
    
        if ($responseType === 'alert-success') {
            return redirect()->route('forgot_password')->with('success', $responseMessage);
        } else {
            return redirect()->route('forgot_password')->with('error', $responseMessage);
        }
    }
    
}
