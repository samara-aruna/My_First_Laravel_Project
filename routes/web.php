<?php

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('student_form');
});

Route::post('/students', [StudentController::class, 'store']);
