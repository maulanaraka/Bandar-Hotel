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
        Schema::create('billings', function (Blueprint $table) {
            $table->increments('BillID');
            $table->integer('ReservationID')->unsigned();
            $table->double('TotalAmount');
            $table->string('PaymentStatus', 8);
            $table->integer('CreditCardNumber');
            $table->timestamps();

            $table->foreign('ReservationID')->references('ReservationID')->on('reservations')->onDelete('restrict')->onUpdate('restrict');
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