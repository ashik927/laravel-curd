<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->nullable();
            $table->string('order_code')->nullable();
            $table->longText('total_cost')->nullable();
            $table->string('sub_total_cost')->nullable();
            $table->longText('total_product')->nullable();
            $table->string('total_quantity')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->string('status');
            $table->longText('payment')->nullable();
            $table->string('payment_cost')->nullable();
            $table->longText('process')->nullable();
            $table->string('customer_note')->nullable();
            $table->string('admin_note')->nullable();
            $table->string('completed_at')->nullable();
            $table->string('transection_id')->nullable();
            $table->longText('description');
            $table->string('seen')->nullable();;
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
        Schema::dropIfExists('orders');
    }
}
