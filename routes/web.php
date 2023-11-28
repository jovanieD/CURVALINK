<?php

use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\HasApiTokens;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\GoodMoralRequestController;
use App\Http\Controllers\Form137RequestController;
use App\Http\Controllers\CertificationRequestController;
use App\Http\Controllers\ScheduleController;

use App\Http\Controllers\GuestUsersController;
use App\Http\Controllers\TeacherHomePageController;
use App\Http\Controllers\AdminHomePageController;

use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\AdminDashboardController;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ManageTeachersController;
use App\Http\Controllers\ManageUsersController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\TeacherController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', [GuestUsersController::class,'index']);

Route::get('/about', [GuestUsersController::class,'showabout']);

Route::get('/offers', [GuestUsersController::class,'showoffers']);

Route::get('/announcement', [GuestUsersController::class,'showannouncement']);

Route::get('/event', [GuestUsersController::class,'showevent']);

Route::get('/contact', [GuestUsersController::class,'showcontact']);

Route::get('/redirect-to-certificate', [GuestUsersController::class,'getcertificate'])->name('redirect.to.certificate');

Route::get('/redirect-to-goodmoral', [GuestUsersController::class,'getgoodmoral'])->name('redirect.to.goodmoral');

Route::get('/redirect-to-form', [GuestUsersController::class,'getform'])->name('redirect.to.form');


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

    Route::get('/deleteUser{id}', [StudentDashboardController::class,'deleteUser']);

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

Route::group(['middleware' => 'auth:teacher'], function (){

    Route::get('/teacher/about', [TeacherHomePageController::class,'showabout']);

    Route::get('/teacher/offers', [TeacherHomePageController::class,'showoffers']);

    Route::get('/teacher/announcement', [TeacherHomePageController::class,'showannouncments']);

    Route::get('/teacher/events', [TeacherHomePageController::class,'showevents']);

    Route::get('/teacher/contact', [TeacherHomePageController::class,'showcontact']);  //end of the homepage

    Route::get('/teacher', [TeacherDashboardController::class,'showhome']);

    Route::get('/teacherprofileimage', [TeacherDashboardController::class,'teacherprofileimage'])->name('teacherprofileimage');

    Route::get('/teacher/dashboard', [TeacherDashboardController::class,'showTeacherDashboard']);

    Route::get('/teacher/profile', [TeacherDashboardController::class,'showProfile']);

    Route::get('/teacher/editprofile', [TeacherDashboardController::class,'editProfile']);

    Route::post('/teacher/updateprofile', [TeacherDashboardController::class,'updateProfile']);

    Route::get('/teacher/settings', [TeacherDashboardController::class,'settings']);

    Route::post('/teacher/updatepassword', [TeacherDashboardController::class,'updatePassword']);

    Route::get('/teacher/deleteUser/{id}', [TeacherDashboardController::class,'deleteUser']);

    Route::get('/teacher/schedules', [TeacherDashboardController::class,'showschedule']); //start for sched

    Route::get('/allschedules', [ScheduleController::class, 'getallschedule']); 

    Route::get('/showavailablerequests', [ScheduleController::class, 'showAllAvailableRequest']); 

    Route::get('/search-requests', [ScheduleController::class, 'searchRequests'])->name('searchRequests');    //not functional yet

    Route::post('/createappoinment/{user_id}', [ScheduleController::class, 'createappoinment']);

    Route::post('/postappoinment', [ScheduleController::class, 'postappoinment']);

    Route::put('/updateEvent/{eventId}', [ScheduleController::class, 'updateEvent']);

    Route::post('/certificaterequest/{id}/update', [CertificationRequestController::class,'updateCertification']); //dashboard  view -update

    Route::post('/goodmoralrequest/{id}/update', [GoodMoralRequestController::class,'updateGoodMoral']);
    
    Route::post('/form137request/{id}/update', [Form137RequestController::class,'updateForm137']);

    Route::get('/requestor/{userid}', [CertificationRequestController::class,'getRequestorProfile']);

    Route::post('/editrequest/{user_id}', [TeacherDashboardController::class,'getRequest']);

    Route::post('/view/{user_id}', [TeacherDashboardController::class,'viewRequest']);



    Route::get('/schedules/goodmoral', [GoodMoralController::class,'index']);

    Route::delete('/schedule/{id}', [GoodMoralController::class, 'deleteEvent']);

    Route::put('/schedule/{id}', [GoodMoralController::class, 'update']);

    Route::put('/schedule/{id}/resize', [GoodMoralController::class, 'resize']);

    Route::get('/events/search', [GoodMoralController::class, 'search']);

    Route::post('/teacher/logout', [TeacherController::class,'logout']);


});


Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin', [AdminHomePageController::class,'showhome']);

    Route::get('/admin-about', [AdminHomePageController::class,'showabout']); //

    Route::get('/admin-offers', [AdminHomePageController::class,'showoffers']); //

    Route::get('/admin-announcement', [AdminHomePageController::class,'showannouncments']); //

    Route::get('/admin-events', [AdminHomePageController::class,'showevents']); //

    Route::get('/admin-contact', [AdminHomePageController::class,'showcontact']); 

    Route::get('/adminprofileimage', [AdminDashboardController::class,'adminprofileimage'])->name('adminprofileimage');

    Route::get('/admin/dashboard', [AdminDashboardController::class,'showAdminDashboard']);

    Route::get('/admin/profile', [AdminDashboardController::class,'showProfile']);

    Route::get('/admin/editprofile', [AdminDashboardController::class,'editProfile']);

    Route::post('/admin/updateprofile', [AdminDashboardController::class,'updateProfile']);

    Route::get('/admin/settings', [AdminDashboardController::class,'settings']);

    Route::post('/admin/updatepassword', [AdminDashboardController::class,'updatePassword']);

    Route::get('/admin/deleteUser/{id}', [AdminDashboardController::class,'deleteUser']);

    Route::get('/admin/schedules', [AdminDashboardController::class,'showschedule']); //start for sched

    Route::get('/overallschedules', [AdminDashboardController::class, 'getallschedule']); 

    Route::get('/admin_addschedule', [ScheduleController::class, 'addschedule']); 

    Route::post('/admin_createappoinment/{user_id}', [ScheduleController::class, 'admincreateappoinment']);

    Route::post('/admin_postappoinment', [ScheduleController::class, 'adminpostappoinment']); 

    Route::put('/admin_updateEvent/{eventId}', [ScheduleController::class, 'adminUpdateEvent']);

    Route::post('/admin_certificaterequest/{id}/update', [CertificationRequestController::class,'adminUpdateCertification']); //dashboard  view -update

    Route::post('/admin_goodmoralrequest/{id}/update', [GoodMoralRequestController::class,'adminUpdateGoodMoral']);
    
    Route::post('/admin_form137request/{id}/update', [Form137RequestController::class,'adminUpdateForm137']);
    
    Route::get('/admin_requestor/{userid}', [AdminDashboardController::class,'getRequestorProfile']);

    Route::post('/admin_view/{user_id}', [AdminDashboardController::class,'viewRequest']);

    Route::post('/admin_editrequest/{user_id}', [AdminDashboardController::class,'getRequest']);


    Route::get('/all_Teachers', [ManageTeachersController::class,'showAllTeacher']);

    Route::get('/all_Users', [ManageUsersController::class,'showAllUsers']);
















    // Route::get('/showavailablerequests', [ScheduleController::class, 'showAllAvailableRequest']); 

    // Route::get('/search-requests', [ScheduleController::class, 'searchRequests'])->name('searchRequests');


    // Route::put('/updateEvent/{eventId}', [ScheduleController::class, 'updateEvent']);



    // Route::get('/admin', function () {
    //     return view('admin.home-admin');
    // });

    // Route::get('/admin/dashboard', function () {
    //     return view('admin.dashboard');
    // });

    // Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
    // Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

    // Route::get('/teacher/register',[RegisterController::class,'showTeacherRegisterForm'])->name('teacher.register-view');
    // Route::post('/teacher/register',[RegisterController::class,'createTeacher'])->name('teacher.register');
});


// Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
// Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

// Route::get('/teacher/register',[RegisterController::class,'showTeacherRegisterForm'])->name('teacher.register-view');
// Route::post('/teacher/register',[RegisterController::class,'createTeacher'])->name('teacher.register');
