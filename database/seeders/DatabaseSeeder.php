<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 users with profiles
        User::factory(10)
            ->has(Profile::factory())
            ->create();

        // Create 5 courses
        Course::factory(5)->create();

        // Create 20 course-user relationships (users enrolled in courses)
        Course::all()->each(function($course) {
            $course->users()->attach(User::inRandomOrder()->take(4)->pluck('id'));
        });
    }
}