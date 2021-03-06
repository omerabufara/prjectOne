<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nationalId')->unique();
            $table->integer('building_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->string('issueCity');
            $table->string('idType');
            $table->string('phone');
            $table->string('email');
            $table->rememberToken();
            $table->timestamps();

        });

        Schema::table('costumers', function($table) {

            $table->foreign('building_id')->references('id')->on('buildings');

        });

        Schema::table('costumers', function($table) {

            $table->foreign('unit_id')->references('id')->on('units');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costumers');
    }
}
