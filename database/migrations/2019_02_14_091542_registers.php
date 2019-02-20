<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->unsignedInteger('id_order');
            $table->unsignedInteger('id_game');
            $table->unsignedInteger('id');
            $table->integer('quantity');
	    $table->timestamps();
            $table->foreign('id_order')->references('id')->on('orders')->onUpdate('cascade');
            $table->foreign('id_game')->references('id')->on('games')->onUpdate('cascade');
            $table->foreign('id')->references('id')->on('users')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
}
