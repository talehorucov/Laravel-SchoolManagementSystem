<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookBookCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('book_book_categories', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained();
            $table->foreignId('book_category_id')->constrained();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('book_book_categories');
    }
}
