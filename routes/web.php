<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Ardiana Abdul Gumelar',
        'role' => 'Admin',
        'buah' => ['jeruk', 'mangga', 'tomat']
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);