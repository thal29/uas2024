<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudents571Table extends Migration
{
    public function up()
    {
        Schema::create('students_571', function (Blueprint $table) {
            $table->id();
            $table->string('student_number_571');
            $table->string('student_name_571');
            $table->string('gender_571');
            $table->decimal('gpa_571', 3, 2); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students_571');
    }
}
