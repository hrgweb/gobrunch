<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('IDEvent');
            $table->integer('IDRoomLayout')->nullable();
            $table->integer('IDPlace')->nullable();
            $table->integer('IDEventType')->nullable();
            $table->integer('IDEventTypeReadiness')->nullable();
            $table->string('SessionName')->nullable();
            $table->text('Description')->nullable();
            $table->date('DateOfEvent')->nullable();
            $table->string('GMT')->nullable();
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
        Schema::dropIfExists('events');
    }
}
