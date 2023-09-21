<?php

use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\HasApiTokens;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/Login', [LoginController::class, 'show'])->name('Login');
Route::post('/Login', [LoginController::class, 'authenticate'])->name('Login');


Route::group(['middleware' => 'auth:teacher'], function () {
    Route::get('/teacher', function () {
        return view('teacher.teacher');
    });

    // Other routes for admins

});


Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin', function () {
        return view('admin.admin');
    });

    // Other routes for admins
});


// Route::get('/teacher',[LoginController::class,'showh'])->name('teacher.login-view');

// Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
// Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

// Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
// Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin',function(){
//     return view('admin.admin');
// })->middleware('auth:admin');


// Route::get('/teacher',[LoginController::class,'showTeacherLoginForm'])->name('teacher.login-view');
// Route::post('/teacher',[LoginController::class,'teacherLogin'])->name('teacher.login');

// Route::get('/teacher/register',[RegisterController::class,'showTeacherRegisterForm'])->name('teacher.register-view');
// Route::post('/teacher/register',[RegisterController::class,'createTeacher'])->name('teacher.register');

// Route::get('/teacher',function(){
//     return view('teacher');
// })->middleware('auth:teacher');
