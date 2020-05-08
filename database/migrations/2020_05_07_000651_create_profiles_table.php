<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->integer('status');
            $table->string('age');
            $table->string('address');
            $table->string('cellphone_no');
            $table->string('salary');
            $table->text('objectives');
            $table->text('background');
            $table->text('office_desc');
            $table->text('cv');
            $table->text('recent');
            $table->text('audio');
            $table->text('office');
            $table->text('internet');
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
        Schema::dropIfExists('profiles');
    }
}
