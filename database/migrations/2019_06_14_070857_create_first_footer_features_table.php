<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstFooterFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_footer_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon');
            $table->string('heading');
            $table->longText('description');
            $table->string('url');
            $table->string('button_value');
            $table->integer('feature_div');
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
        Schema::dropIfExists('first_footer_features');
    }
}
