<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guess', function (Blueprint $table) {
            $table->bigIncrements('id_guess');
            $table->unsignedBigInteger('id_presence');
            $table->foreign('id_presence')
                ->references('id_presence')
                ->on('presence');
            $table->unsignedBigInteger('id_option');
            $table->foreign('id_option')
                ->references('id_option')
                ->on('option');
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
        Schema::dropIfExists('guess');
    }
}
