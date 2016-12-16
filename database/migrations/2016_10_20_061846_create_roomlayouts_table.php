<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomlayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomlayouts', function (Blueprint $table) {
            $table->increments('IDRoomLayout');
            $table->string('RoomName')->nullable();
            $table->string('Layout')->nullable();
            $table->integer('NumberOfSeats')->nullable();
            $table->string('ThumbImg')->nullable();
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
        Schema::dropIfExists('roomlayouts');
    }
}
