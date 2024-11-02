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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Product name
            $table->text('description')->nullable(); // Product description
            $table->decimal('price')->nullable(); // Product price
            $table->string('image')->nullable();
            $table->string('quantity')->nullable(0); // Product quantitymage path
            $table->integer('stock')->nullable(0); // Product stock quantity


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
