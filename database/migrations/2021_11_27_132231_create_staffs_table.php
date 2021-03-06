<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('email')->nullable();
            $table->string('password');
            $table->date('dateOfBirth')->nullable();
            $table->string('identity_no');
            $table->boolean('gender');
            $table->string('phone');
            $table->text('address');
            $table->float('salary')->default(0);
            $table->foreignId('subject_id')->nullable()->constrained();
            $table->string('photo')->nullable();
            $table->date('join_date')->nullable();
            $table->date('leave_date')->nullable();
            $table->date('lastLoginDate')->nullable();
            $table->softDeletes();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
