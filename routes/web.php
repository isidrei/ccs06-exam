<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
Route::get('/begin',[GradeController::class,'begin']);
Route::get('/enter-grades',[GradeController::class,'enterGrades']);
