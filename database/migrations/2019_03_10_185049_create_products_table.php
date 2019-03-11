<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('products', function (Blueprint $table) {
           
            $table->increments('id');
            $table->float('amount');
            $table->longText('description');
            $table->integer('stock');
            $table->integer('star');
            $table->Integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');	
            $table->Integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');	 
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::table('products', function (Blueprint $table) {	
        //     $table->foreign('cat_id')->references('id')->on('categories');
           
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
