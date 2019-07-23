<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->Integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('users');
            $table->Integer('staff_id')->unsigned()->nullable();
            $table->foreign('staff_id')->references('id')->on('users');
            $table->float('order_amount');
            $table->string('order_status')->nullable();
            $table->string('order_method')->nullable();
            $table->longText('shipping_address');
            $table->timestamp('shipping_date')->nullable();
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
