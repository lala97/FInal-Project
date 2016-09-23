<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelAnouncOrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_rel_anounc_org_table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('announce_id')->unsigned();
            $table->foreign('announce_id')->references('id')->on('announcements');
            $table->integer('org_id')->unsigned();
            $table->foreign('org_id')->references('id')->on('organizations');
            $table->string('name');
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
        Schema::drop('create_rel_anounc_org_table');
    }
}
