<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Reservation')->insert([
            ['ReservationID' => 111, 'NIKID' => 101, 'RoomID' => 100, 'CheckInDate' => '2024-10-27', 'CheckOutDate' => '2024-10-28', 'TotalAmount' => 1000000, 'idPenyewaanMobil' => '001'],
            ['ReservationID' => 222, 'NIKID' => 102, 'RoomID' => 101, 'CheckInDate' => '2024-10-31', 'CheckOutDate' => '2024-11-01', 'TotalAmount' => 1000000, 'idPenyewaanMobil' => '002'],
            ['ReservationID' => 333, 'NIKID' => 103, 'RoomID' => 200, 'CheckInDate' => '2024-11-01', 'CheckOutDate' => '2024-11-03', 'TotalAmount' => 4000000, 'idPenyewaanMobil' => '003'],
            ['ReservationID' => 444, 'NIKID' => 104, 'RoomID' => 201, 'CheckInDate' => '2024-11-01', 'CheckOutDate' => '2024-11-02', 'TotalAmount' => 2000000, 'idPenyewaanMobil' => '004'],
            ['ReservationID' => 555, 'NIKID' => 105, 'RoomID' => 300, 'CheckInDate' => '2024-11-02', 'CheckOutDate' => '2024-11-04', 'TotalAmount' => 6000000, 'idPenyewaanMobil' => '005'],
        ]);
    }
}