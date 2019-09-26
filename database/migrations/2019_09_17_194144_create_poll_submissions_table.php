<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_submissions', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('poll_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('option')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('poll_id')->references('id')->on('polls')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_submissions');
    }
}
