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
use App\Http\Controllers\ManageAdminsController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\TeacherController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EventController;

use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotEmail;


// Route::get('/forgot_password', function () {
//     return view('auth.passwords.forgotpassword');

//     // Mail::to('jovanie.dasian@student.passerellesnumeriques.org')->send(new ForgotEmail());

// });

Route::get('/', [GuestUsersController::class,'index']);

Route::get('/about', [GuestUsersController::class,'showabout']);

Route::get('/offers', [GuestUsersController::class,'showoffers']);

Route::get('/all_announcements', [GuestUsersController::class,'showannouncement']);

Route::get('/searchAnnouncement', [GuestUsersController::class,'searchAnnouncement'])->name('searchAnnouncement');

Route::get('/events', [GuestUsersController::class,'showevent']);

Route::get('/searchevent', [GuestUsersController::class,'searchEvent'])->name('searchEvent');

Route::get('/contacts', [GuestUsersController::class,'showcontact']);

Route::get('/redirect-to-certificate', [GuestUsersController::class,'getcertificate'])->name('redirect.to.certificate');

Route::get('/redirect-to-goodmoral', [GuestUsersController::class,'getgoodmoral'])->name('redirect.to.goodmoral');

Route::get('/redirect-to-form', [GuestUsersController::class,'getform'])->name('redirect.to.form');


Route::get('/forgot_password', [GuestUsersController::class,'showforgot'])->name('forgot_password');

Route::post('/forgot_password', [GuestUsersController::class,'forgotpassword']);



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

    Route::get('/profile', [StudentDashboardController::class,'profile']);

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

    Route::get('/schedules', [ScheduleController::class, 'getEvents']);

    Route::get('/schedules', [ScheduleController::class,'showStudentRequestCertification']);

    Route::get('/settings', [StudentDashboardController::class,'settings']);

});

Route::group(['middleware' => 'auth:teacher'], function (){

    Route::get('/teacher', [TeacherDashboardController::class,'showhome']);

    Route::get('/teacher_about', [TeacherHomePageController::class,'showabout']);

    Route::get('/teacher_offers', [TeacherHomePageController::class,'showoffers']);

    Route::get('/teacher_all_announcements', [TeacherHomePageController::class,'showannouncments']); 

    Route::get('/teacherannouncementsearch', [TeacherHomePageController::class,'teacherannouncementsearch'])->name('teacherannouncementsearch');

    Route::get('/teacher_all_events', [TeacherHomePageController::class,'showevents']);

    Route::get('/teachereventssearch', [TeacherHomePageController::class,'teachereventssearch'])->name('teachereventssearch');

    Route::get('/teacher_contact', [TeacherHomePageController::class,'showcontact']);  //end of the homepage

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

    Route::get('/schedules/goodmoral', [GoodMoralController::class,'index']);   // not yey

    Route::delete('/schedule/{id}', [GoodMoralController::class, 'deleteEvent']);

    Route::put('/schedule/{id}', [GoodMoralController::class, 'update']);

    Route::put('/schedule/{id}/resize', [GoodMoralController::class, 'resize']);

    Route::get('/events/search', [GoodMoralController::class, 'search']);

    Route::post('/teacher/logout', [TeacherController::class,'logout']);

    Route::get('/teacher/all_announcements', [AnnouncementController::class, 'show']); //announcement

    Route::post('/teacher_deleteannouncement/{id}', [AnnouncementController::class, 'deleteAnnouncement']);

    Route::get('/teachersearchAnnouncement', [AnnouncementController::class, 'searchAnnouncement'])->name('teachersearchAnnouncement');

    Route::get('/teacher/add_announcement', [AnnouncementController::class, 'addAnnouncement']);

    Route::post('/post_announcement', [AnnouncementController::class, 'postAnnouncement']);

    Route::get('/update_announcement/{id}', [AnnouncementController::class, 'editAnnouncement']);

    Route::put('/updateAnnouncement/{id}', [AnnouncementController::class, 'updateAnnouncement'])->name('updateAnnouncement');

    Route::get('/teacher/all_events', [EventController::class, 'show']);

    Route::get('/eventSearch', [EventController::class, 'eventSearch'])->name('eventSearch');

    Route::post('/teacher_deleteevent/{id}', [EventController::class, 'deleteEvent']);

    Route::get('/teacher/add_event', [EventController::class, 'addEvent']);

    Route::post('/post_event', [EventController::class, 'postEvent'])->name('eventpost');

    Route::get('/update_event/{id}', [EventController::class, 'editEvent']);

    Route::put('/update_event/{id}', [EventController::class, 'updateEvent'])->name('update_event');
});

Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/admin', [AdminHomePageController::class,'showhome']);

    Route::get('/admin_about', [AdminHomePageController::class,'showabout']); //

    Route::get('/admin_offers', [AdminHomePageController::class,'showoffers']); //

    Route::get('/admin_announcement', [AdminHomePageController::class,'showannouncments']); //

    Route::get('/admin_events', [AdminHomePageController::class,'showevents']); //

    Route::get('/admin_contact', [AdminHomePageController::class,'showcontact']); 

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

    Route::get('/all_Teachers', [ManageTeachersController::class,'showAllTeacher']);  //start manage userss

    Route::get('/all_Users', [ManageUsersController::class,'showAllUsers'])->name('adminviewalluser');

    Route::get('/view_User/{id}', [ManageUsersController::class,'showUser']);

    Route::get('/edit_User/{id}', [ManageUsersController::class,'updateUser']);

    Route::post('/admin_updateUser/{id}', [ManageUsersController::class,'adminUpdateUser']);

    Route::delete('/admin_deleteUser/{id}', [ManageUsersController::class,'delete']);

    Route::get('/searchUser', [ManageUsersController::class,'search'])->name('searchUsers');

    Route::get('/admin_add_user', [ManageUsersController::class,'showadduser']);

    Route::post('/admin_create_user', [ManageUsersController::class,'createUser'])->name('admin_create_user');

    Route::get('/all_Teachers', [ManageTeachersController::class,'showAllTeachers']);

    Route::get('/view_teacher/{id}', [ManageTeachersController::class,'showTeacher']);

    Route::get('/edit_teacher/{id}', [ManageTeachersController::class,'updateTeacher']);

    Route::post('/admin_updateTeacher/{id}', [ManageTeachersController::class,'adminUpdateTeacher']);

    Route::delete('/admin_deleteTeacher/{id}', [ManageTeachersController::class,'delete']);

    Route::get('/searchTeaches', [ManageTeachersController::class,'search'])->name('searchTeachers');

    Route::get('/admin_add_teacher', [ManageTeachersController::class,'showaddteacher']);

    Route::post('/admin_create_teacher', [ManageTeachersController::class,'createTeacher']);

    Route::get('/all_Admins', [ManageAdminsController::class,'showAllAdmins']);

    Route::get('/searchAdmin', [ManageAdminsController::class,'search'])->name('searchAdmin');

    Route::get('/admin_add_admin', [ManageAdminsController::class,'showaddteacher']);

    Route::post('/admin_create_admin', [ManageAdminsController::class,'createAdmin']);

    Route::get('/view_admin/{id}', [ManageAdminsController::class,'showOnlyAdmin']);

    Route::get('/edit_admin/{id}', [ManageAdminsController::class,'updateAdmin']);

    Route::post('/admin_updateAdmin/{id}', [ManageAdminsController::class,'adminUpdateAdmin']);

    Route::delete('/admin_deleteAdmin/{id}', [ManageAdminsController::class,'delete']);

    Route::get('/admin/all_announcements', [AnnouncementController::class, 'adminshow']); 

    Route::get('/adminsearchAnnouncement', [AnnouncementController::class, 'adminsearchAnnouncement'])->name('adminsearchAnnouncement');

    Route::get('/admin/add_announcement', [AnnouncementController::class, 'adminaddAnnouncement']);

    Route::post('/admin_post_announcement', [AnnouncementController::class, 'adminpostAnnouncement']); 

    Route::get('/admin_update_announcement/{id}', [AnnouncementController::class, 'admineditAnnouncement']);

    Route::put('/adminupdateAnnouncement/{id}', [AnnouncementController::class, 'adminupdateAnnouncement'])->name('adminupdateAnnouncement');

    Route::post('/admin_deleteannouncement/{id}', [AnnouncementController::class, 'admindeleteAnnouncement']);

    Route::get('/admin/all_events', [EventController::class, 'adminshow']);

    Route::get('/admineventSearch', [EventController::class, 'admineventSearch'])->name('admineventSearch');

    Route::get('/admin/add_event', [EventController::class, 'adminaddEvent']);

    Route::post('/adminpost_event', [EventController::class, 'adminpostEvent'])->name('adminpost_event');

    Route::post('/admin_deleteevent/{id}', [EventController::class, 'admindeleteEvent']);

    Route::get('/adminupdate_event/{id}', [EventController::class, 'admineditEvent']);

    Route::put('/adminupdateEvent/{id}', [EventController::class, 'adminupdateEvent'])->name('adminupdateEvent');

});
