<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('floor');
            $table->integer('rooms-num');
            $table->integer('bathrooms-num');
            $table->integer('queenBed-num');
            $table->integer('singleBed-num');
            $table->integer('closet-num');
            $table->integer('TV-num');
            $table->string('AC-type');
            $table->string('room-type');
            $table->string('status');
            $table->rememberToken();
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
        Schema::dropIfExists('rooms');
    }
}
