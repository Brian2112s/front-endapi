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
        Schema::create('recepten', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');            $table->text('ingredients');
            $table->text('nutritional_values');
            $table->enum('difficulty', ['easy', 'medium', 'hard']);
            $table->integer('preparation_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepten');
    }
};
