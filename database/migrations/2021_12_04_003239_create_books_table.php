<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('author_id')->constrained();
            $table->foreignId('book_language_id')->constrained();
            $table->smallInteger('page');
            $table->boolean('isAvailable')->default(false);
            $table->string('cover_photo');
            $table->string('pdf');
            $table->text('slug');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
