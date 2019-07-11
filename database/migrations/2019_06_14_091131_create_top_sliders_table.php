<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('main_heading');
            $table->string('sub_heading');
            $table->string('button_value');
            $table->integer('order')->nullable();
            $table->boolean('isActive')->default(0);
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
        Schema::dropIfExists('top_sliders');
    }
}
