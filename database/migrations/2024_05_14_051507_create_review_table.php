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
            $table->integer('GuestID')->unsigned();
            $table->text('Review');
            $table->timestamps();

            $table->foreign('GuestID')->references('GuestID')->on('guest')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('review');
    }
}