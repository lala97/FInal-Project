<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('user_surname');
            $table->integer('user_phone');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->integer('user_region_id')->unsigned();
            $table->foreign('user_region_id')->references('id')->on('regions');
            $table->integer('user_city_id')->unsigned();
            $table->foreign('user_city_id')->references('id')->on('cities');
            $table->string('user_adress');
            $table->string('user_avatar');
            $table->boolean('user_type');
            $table->boolean('user_status');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
