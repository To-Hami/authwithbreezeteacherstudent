<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\TimetableController;
use App\Http\Controllers\teacher\TimetableController as TeacherController;

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

/************************** teacher ****************************/

Route::get('/teacher/timetable', [TeacherController::class,'index'])
    ->middleware(['auth','verified','role:1'])
    ->name('teacher.timetable');


/************************** student ****************************/

Route::get('/student/timetable', [TimetableController::class,'index'])
    ->middleware(['auth','verified','role:2'])
    ->name('student.timetable');

/*********************** others  *****************************/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
