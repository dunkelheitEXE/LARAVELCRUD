<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', [StudentController::class, 'getStudents']);

Route::get('/registration', function () {
    return view("SignUpView", []);
});

Route::delete('/delete/{id}', [StudentController::class, 'deleteStudent']);

Route::post('/process', [StudentController::class, 'signUp']);