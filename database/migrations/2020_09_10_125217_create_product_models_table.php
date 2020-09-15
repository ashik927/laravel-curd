<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('user_id')->nullable();
            $table->string('view')->nullable();
            $table->string('rating')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('price');
            $table->string('stock');
            $table->longText('description');
            $table->string('attributes')->nullable();
            $table->string('discount')->nullable();
            $table->string('shipping_cost')->nullable();
            $table->string('active')->nullable();
            $table->string('available');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_models');
    }
}
