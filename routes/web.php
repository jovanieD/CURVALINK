<?php

use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\HasApiTokens;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoodMoralController;

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

Auth::routes();

Route::get('/Login', [LoginController::class, 'show'])->name('Login');
Route::post('/Login', [LoginController::class, 'authenticate'])->name('Login');

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/dashboard', function () {
        return view('student.dashboard');
    });

    // Route::get('', [ ::class, '']);

});


Route::group(['middleware' => 'auth:teacher'], function () {

    Route::get('/schedule/goodmoral', [GoodMoralController::class,'index']);
    Route::get('/events', [GoodMoralController::class, 'getEvents']);

    Route::delete('/schedule/{id}', [GoodMoralController::class, 'deleteEvent']);

    Route::put('/schedule/{id}', [GoodMoralController::class, 'update']);

    Route::put('/schedule/{id}/resize', [GoodMoralController::class, 'resize']);

    Route::get('/events/search', [GoodMoralController::class, 'search']);

    Route::get('/teacher', function () {
        return view('teacher.home-teacher');
    });
    Route::get('/teacher/dashboard', function () {
        return view('teacher.dashboard');
    });

    Route::post('/teacher/logout', [TeacherController::class,'logout']);
    Route::get('/teacher/settings', function () {
        return view('teacher.account.settings');
    });



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
