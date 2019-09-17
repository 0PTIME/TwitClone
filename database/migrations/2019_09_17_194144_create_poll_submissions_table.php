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
            $table->integer('polls_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->tinyInteger('option')->unsigned();

            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('polls_id')->references('id')->on('polls')->onUpdate('cascade');
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
