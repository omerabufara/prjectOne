<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            $table->increments('id');
            $table->string('nationalId')->unique();
            $table->string('issueCity');
            $table->string('idType');
            $table->string('phone');
            $table->string('email');
            $table->string('email');
            $table->rememberToken();
            $table->timestamps();    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
