<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Billing')->insert([
            ['BillID' => 123456, 'ReservationID' => 111, 'TotalAmount' => 1000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1234],
            ['BillID' => 123457, 'ReservationID' => 222, 'TotalAmount' => 1000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 5689],
            ['BillID' => 123458, 'ReservationID' => 333, 'TotalAmount' => 4000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1357],
            ['BillID' => 123459, 'ReservationID' => 444, 'TotalAmount' => 2000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 2468],
            ['BillID' => 123460, 'ReservationID' => 555, 'TotalAmount' => 6000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1987],
        ]);
    }
}