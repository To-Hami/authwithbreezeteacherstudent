<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\TimetableController;


Route::group([
   'middleware'=>'auth',
   'name'=>'student.',
   'prefix'=>'/student',
],function (){
    Route::get('/timetable',[TimetableController::class,'index'])->name('timetable');
});

