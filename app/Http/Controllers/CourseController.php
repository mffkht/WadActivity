<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function users($courseId)
    {
        $course = Course::with('users')->findOrFail($courseId);  // eager load users

        $user = $course->user;

        return view('courseusers', ['course' => $course, 'user' => $user]);
        
    }
}