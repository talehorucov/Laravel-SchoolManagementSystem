<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('email')->nullable();
            $table->string('password');
            $table->foreignId('parent_id')->constrained();
            $table->foreignId('grade_id')->nullable()->constrained();
            $table->date('dateOfBirth');
            $table->boolean('gender');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('photo')->nullable();
            $table->date('lastLoginDate')->nullable();
            $table->softDeletes();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
