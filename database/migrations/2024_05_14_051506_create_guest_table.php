<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestTable extends Migration
{
    public function up()
    {
        Schema::create('guest', function (Blueprint $table) {
            $table->increments('GuestID');
            $table->string('GuestFullName', 100);
            $table->string('GuestAddress', 200);
            $table->string('GuestPhone', 15);
            $table->string('GuestEmail', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guest');
    }
}