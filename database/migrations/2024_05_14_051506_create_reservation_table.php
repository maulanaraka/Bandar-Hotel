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
            $table->foreignId('NIK')->references('NIKID')->on('guest')->onDelete('cascade')->constrained();
            $table->foreignId('RoomID')->references('RoomID')->on('rooms')->onDelete('cascade')->constrained();
            $table->date('CheckInDate');
            $table->date('CheckOutDate');
            $table->double('TotalAmount');
            $table->string('idPenyewaanMobil');
            $table->timestamps();

            // $table->foreign('NIKID')->references('NIKID')->on('guest')->onDelete('restrict')->onUpdate('restrict');
            // $table->foreign('RoomID')->references('RoomID')->on('rooms')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}