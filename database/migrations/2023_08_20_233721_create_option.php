<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOption extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option', function (Blueprint $table) {
            $table->bigIncrements('id_option');
            $table->string("name");
            $table->timestamps();
        });

        \App\Option::query()
            ->create(['id_option' => 1, 'name' => 'Menino']);
        \App\Option::query()
            ->create(['id_option' => 2, 'name' => 'Menina']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option');
    }
}
