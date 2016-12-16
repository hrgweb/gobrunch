<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventregisteredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventregistered', function (Blueprint $table) {
            $table->increments('IDEventRegistered');
            $table->integer('IDEvent')->nullable()->unsigned();
            $table->integer('IDUser')->nullable()->unsigned();
            $table->integer('IDUserType')->nullable()->unsigned();
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
        Schema::dropIfExists('eventregistered');
    }
}
