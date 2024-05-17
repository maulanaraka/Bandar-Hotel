<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('ReservationID');
            $table->integer('NIKID')->unsigned();
            $table->integer('RoomID')->unsigned();
            $table->date('CheckInDate');
            $table->date('CheckOutDate');
            $table->double('TotalAmount');
            $table->string('idPenyewaanMobil');
            $table->timestamps();

            $table->foreign('NIKID')->references('NIKID')->on('guests');
            $table->foreign('RoomID')->references('RoomID')->on('rooms');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}