<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\Course;

class UserController extends Controller
{

    


    public function showUser($profileId){
        $profile = Profile::with('user')->findOrFail($profileId);
        return view ('show', ['profile' => $profile]);
    }

    public function showCourses($userId)
    {
        // Find the user by ID, or fail if not found
        $user = User::findOrFail($userId);

        // Eager load the courses associated with the user
        $courses = $user->courses;

        // Return the view with the user and courses data
        return view('user.courses', compact('user', 'courses'));
    }

    public function users($courseId)
    {
        $course = Course::with('users')->findOrFail($courseId);  // eager load users

        $user = $course->user;

        return view('courses', ['course' => $course, 'user' => $user]);
        
    }
}