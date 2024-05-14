<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing', function (Blueprint $table) {
            $table->increments('BillID');
            $table->integer('ReservationID')->unsigned();
            $table->integer('TotalAmount');
            $table->string('PaymentStatus', 50);
            $table->integer('CreditCardNumber');
            $table->timestamps();

            $table->foreign('ReservationID')->references('ReservationID')->on('reservation')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing');
    }
}