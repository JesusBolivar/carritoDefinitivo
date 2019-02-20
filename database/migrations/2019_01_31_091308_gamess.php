<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gamess extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
         Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->decimal('price',6,2);
            $table->string('category',45);
            $table->text('image');
	    $table->text('video');
            $table->text('description');
            $table->date('launch');
            $table->string('creator');
            $table->string('editor');
            $table->string('key',100);
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
        Schema::dropIfExists('games');
    }
}
