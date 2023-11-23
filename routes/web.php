<?php

use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\HasApiTokens;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\GoodMoralRequestController;
use App\Http\Controllers\Form137RequestController;
use App\Http\Controllers\CertificationRequestController;
use App\Http\Controllers\ScheduleController;

use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;

use App\Http\Controllers\AccountController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\TeacherController;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [HomeController::class,'welcomecheck']);

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/offers', function () {
    return view('offer.offer');
});

Route::get('/announcement', function () {
    return view('announcement.announcement');
});

Route::get('/event', function () {
    return view('event.event');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

// Route::post('/sendemail', [StudentDashboardController::class,'sendEmail']);

Auth::routes();

Route::get('/Login', [LoginController::class, 'show'])->name('Login');
Route::post('/Login', [LoginController::class, 'authenticate'])->name('Login');



Route::group(['middleware' => 'auth:web'], function () {

    Route::get('/userprofileimage', [StudentDashboardController::class,'profileImage'])->name('userprofileimage');

    Route::get('/dashboard', [StudentDashboardController::class,'showStudentDashboard']);

    Route::post('/getrequest/{id}', [StudentDashboardController::class,'getRequest']);

    Route::post('/viewrequest/{id}', [StudentDashboardController::class,'viewRequest']);

    Route::delete('/deleterequest/{id}', [StudentDashboardController::class,'deleteRequest']);

    Route::get('/editProfile', [AccountController::class,'editProfile']);

    Route::post('/updateProfile', [StudentDashboardController::class,'updateProfile']);

    Route::post('/updatePassword', [StudentDashboardController::class,'updatePassword']);

    Route::get('/deleteUser', [StudentDashboardController::class,'deleteUser']);

    Route::get('/request/certificate', [CertificationRequestController::class,'showCertificateForm']);  //request

    Route::post('/request/certificate', [CertificationRequestController::class,'createNewCertificationRequest']);

    Route::post('/update/cretificate/{id}', [CertificationRequestController::class,'updateCertificationRequest']);

    Route::get('/request/form137', [Form137RequestController::class,'showForm137Form']);

    Route::post('/request/form137', [Form137RequestController::class,'createNewForm137Request']);

    Route::post('/update/form137/{id}', [Form137RequestController::class,'updateForm137Request']);

    Route::get('/request/goodmoral', [GoodMoralRequestController::class,'showFormGoodMoral']);

    Route::post('/request/goodmoral', [GoodMoralRequestController::class,'createNewGoodMoralRequest']);

    Route::post('/update/goodmoral/{id}', [GoodMoralRequestController::class,'updateGoodMoralRequest']);

    Route::get('/events', [ScheduleController::class, 'getEvents']);

    Route::get('/schedules', [ScheduleController::class,'showStudentRequestCertification']);

    Route::get('/settings', [StudentDashboardController::class,'settings']);

    Route::get('/profile', [StudentDashboardController::class,'profile']);

});

Route::group(['middleware' => 'auth:teacher'], function () {

    Route::get('/teacherprofileimage', [TeacherDashboardController::class,'teacherprofileimage'])->name('teacherprofileimage');

    Route::get('/teacher/dashboard', [TeacherDashboardController::class,'showTeacherDashboard']);

    Route::get('/teacher/profile', [TeacherDashboardController::class,'showProfile']);

    Route::get('/teacher/editprofile', [TeacherDashboardController::class,'editProfile']);

    Route::post('/teacher/updateprofile', [TeacherDashboardController::class,'updateProfile']);

    Route::get('/teacher/settings', [TeacherDashboardController::class,'settings']);

    Route::post('/teacher/updatepassword', [TeacherDashboardController::class,'updatePassword']);

    Route::post('/teacher/deleteUser', [TeacherDashboardController::class,'deleteUser']);




    Route::post('/updaterequest/{user_id}', [TeacherDashboardController::class,'getRequest']);

    Route::post('/viewrequest/{user_id}', [TeacherDashboardController::class,'viewRequest']);



    Route::get('/schedules/goodmoral', [GoodMoralController::class,'index']);


    Route::delete('/schedule/{id}', [GoodMoralController::class, 'deleteEvent']);

    Route::put('/schedule/{id}', [GoodMoralController::class, 'update']);

    Route::put('/schedule/{id}/resize', [GoodMoralController::class, 'resize']);

    Route::get('/events/search', [GoodMoralController::class, 'search']);

    Route::get('/teacher', function () {
        return view('teacher.home-teacher');
    });
    // Route::get('/teacher/dashboard', function () {
    //     return view('teacher.dashboard');
    // });

    Route::post('/teacher/logout', [TeacherController::class,'logout']);




    // Route::get('', [ ::class, '']);

});


Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin', function () {
        return view('admin.home-admin');
    });

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
    Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

    Route::get('/teacher/register',[RegisterController::class,'showTeacherRegisterForm'])->name('teacher.register-view');
    Route::post('/teacher/register',[RegisterController::class,'createTeacher'])->name('teacher.register');
});


// Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
// Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

// Route::get('/teacher/register',[RegisterController::class,'showTeacherRegisterForm'])->name('teacher.register-view');
// Route::post('/teacher/register',[RegisterController::class,'createTeacher'])->name('teacher.register');
