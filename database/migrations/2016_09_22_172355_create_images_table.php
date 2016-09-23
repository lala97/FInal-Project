<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_images_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('images_src');
            $table->integer('announce_id')->unsigned();
            $table->foreign('announce_id')->references('id')->on('announcements');
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
        Schema::drop('create_images_table');
    }
}
