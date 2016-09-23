<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquivalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_equivalents_table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('help_id')->unsigned();
            $table->foreign('help_id')->references('id')->on('announcements');
            $table->integer('need_id')->unsigned();
            $table->foreign('need_id')->references('id')->on('announcements');
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
        Schema::drop('create_equivalents_table');
    }
}
