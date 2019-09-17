<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id')->unsigned();
            $table->string('content');
            $table->string('media', 100)->nullable();
            $table->bigInteger('retweet_of')->unsigned()->nullable();
            $table->bigInteger('reply_of')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('retweet_of')->references('id')->on('yaps')->onUpdate('cascade');
            $table->foreign('reply_of')->references('id')->on('yaps')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yaps');
    }
}
