<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
Route::get('/begin',[GradeController::class,'begin']);
Route::post('/enter-grades',[GradeController::class,'enterGrades']);
Route::post('/compute-grades',[GradeController::class,'computeGrades']);