<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls', function (Blueprint $table) {
            $table->Increments('id');
            $table->bigInteger('yap_id')->unsigned();
            $table->string('option_one', 45)->nullable();
            $table->string('option_two', 45)->nullable();
            $table->string('option_three', 45)->nullable();
            $table->string('option_four', 45)->nullable();

            $table->foreign('yap_id')->references('id')->on('yaps')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polls');
    }
}
