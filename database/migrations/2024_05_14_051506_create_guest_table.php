<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestTable extends Migration
{
    public function up()
    {
        Schema::create('guest', function (Blueprint $table) {
            $table->string('NIKID');
            $table->string('Name');
            $table->string('Email', 200);
            $table->string('Phone', 15);
            $table->string('Address', 50);
            $table->string('CreditCardNumber');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guest');
    }
}