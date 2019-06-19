<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlsToAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('link_url');
            $table->string('fb_url');
            $table->string('google_url');
            $table->string('twitter_url');
            $table->string('rss_link');
            $table->string('other');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('link_url');
            $table->string('fb_url');
            $table->string('google_url');
            $table->string('twitter_url');
            $table->string('rss_link');
            $table->string('other');
        });
        
    }
}
