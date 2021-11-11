<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function(Request $request){
    Auth::guard('web')->logout();

    return redirect('/');
})->name('logout');

// Route::get('/dropdown', [StudentController::class, 'index']);


Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');
Route::middleware('rerouting', 'auth')->group(function(){
Route::get('dashboard',[StudentController::class, 'dashboard'])->name('dashboard');

Route::view('addstudent', 'addstudent')->name('student');

Route::view('schedule', 'schedule')->name('schedule');
Route::view('course', 'schedule')->name('course');
Route::view('add-schedule', 'schedule')->name('allSchedule');
});
Route::view('teacher', 'teacher')->name('teacher');
Route::view('student', 'student');

       
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::get('/delete/{id}', [StudentController::class, 'delete']);