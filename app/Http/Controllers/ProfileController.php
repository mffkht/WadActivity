<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('user')->get();  // eager load the related user

        return view('index', ['profiles' => $profiles]);
    }
    
    

  
}