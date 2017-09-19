<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulidings', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('logo');
            $table->rememberToken();
            $table->timestamps();

        });    


        Schema::table('bulidings', function($table) {

            $table->foreign('user_id')->references('id')->on('usesrs');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulidings');    }
}
