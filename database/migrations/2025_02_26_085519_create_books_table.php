<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();            
            $table->string('book_id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('author');
            $table->integer('total_copies');
            $table->integer('available_copies')->nullable();
            $table->integer('book_category_id')->nullable();
            $table->date('publication_date')->nullable();
            $table->integer('photo_id')->nullable();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
