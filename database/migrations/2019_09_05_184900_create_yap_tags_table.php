<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYapTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yap_tags', function (Blueprint $table) {
            $table->bigInteger('yap_id')->unsigned();
            $table->bigInteger('hashtag_id')->unsigned();

            //$table->primary(['yap_id', 'hashtag_id']);
            $table->foreign('yap_id')->references('id')->on('hashtags');
            $table->foreign('hashtag_id')->references('id')->on('yaps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yap_tags');
    }
}
