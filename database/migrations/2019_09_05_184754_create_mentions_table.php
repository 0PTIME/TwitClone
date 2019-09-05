<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentions', function (Blueprint $table) {
            $table->integer('user_id', false, true);
            $table->bigInteger('yap_id', false, true);

            //$table->primary(['user_id', 'yap_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('yap_id')->references('id')->on('yaps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentions');
    }
}
