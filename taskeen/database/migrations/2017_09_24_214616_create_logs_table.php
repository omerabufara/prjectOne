<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('building_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->string('check-in');
            $table->string('check-out');
            $table->string('address');
            $table->string('logo');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('logs', function($table) {

            $table->foreign('user_id')->references('id')->on('users');

        });

        Schema::table('logs', function($table) {

            $table->foreign('building_id')->references('id')->on('buildings');

        });

        Schema::table('logs', function($table) {

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
        Schema::dropIfExists('logs');
    }
}
