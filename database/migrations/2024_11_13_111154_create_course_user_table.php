<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseUserTable extends Migration
{
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');  // course_id foreign key
            $table->foreignId('user_id')->constrained()->onDelete('cascade');    // user_id foreign key
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_user');
    }
}