<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration
{
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->increments('ReviewID');
            $table->unsignedBigInteger('ReservationID');
            $table->int('Rating');
            $table->text('Comment');
            $table->date('InputDate');
            $table->string('TravelType');
            $table->timestamps();

            $table->foreign('ReservationID')->references('ReservationID')->on('reservation')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('review');
    }
}