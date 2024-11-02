<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Product name
            $table->text('description')->nullable(); // Product description
            $table->decimal('price', 8, 2); // Product price
            $table->string('image')->nullable(); // Product image path
            $table->integer('stock')->default(0); // Product stock quantity

            $table->timestamps(); // Created at and Updated at timestamps

        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
