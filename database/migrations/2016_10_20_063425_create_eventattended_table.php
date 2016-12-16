<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventattendedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventattended', function (Blueprint $table) {
            $table->increments('IDEventAttended');
            $table->integer('IDEvent')->unsigned()->nullable();
            $table->integer('IDUser')->unsigned()->nullable();
            $table->date('DateOfJoin')->nullable();
            $table->date('DateOfExit')->nullable();
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
        Schema::dropIfExists('eventattended');
    }
}
