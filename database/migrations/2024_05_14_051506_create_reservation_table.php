<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('ReservationID');
            $table->integer('GuestID')->unsigned();
            $table->integer('RoomID')->unsigned();
            $table->date('CheckInDate');
            $table->date('CheckOutDate');
            $table->timestamps();

            $table->foreign('GuestID')->references('GuestID')->on('guest')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('RoomID')->references('RoomID')->on('rooms')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}