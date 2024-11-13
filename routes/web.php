<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/profiles', [ProfileController::class, 'index']);  // Show all profiles, http://127.0.0.1:8000/profiles
Route::get('/profile/{id}', [UserController::class, 'showUser']); //Show a user profile, http://127.0.0.1:8000/profile/1
Route::get('/user/{id}/courses', [UserController::class, 'users']);  // Show courses of a user, http://127.0.0.1:8000/user/1/courses
Route::get('/course/{id}/users', [CourseController::class, 'users']); // Show users of the course, http://127.0.0.1:8000/course/1/users






