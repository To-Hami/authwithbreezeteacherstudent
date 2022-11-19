<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\TimetableController;


Route::group([
   'middleware'=>'auth',
   'name'=>'teacher.',
   'prefix'=>'/teacher',
],function (){
    Route::get('/timetable',[\App\Http\Controllers\Teacher\TimetableController::class,'index'])->name('timetable');
});
