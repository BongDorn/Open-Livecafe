<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // database/migrations/2024_10_29_123456_create_categories_table.php




    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Category name
            $table->text('description')->nullable(); // Category description
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
