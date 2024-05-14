<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Review')->insert([
            ['ReviewID' => 1, 'ReservationID' => 111, 'Rating' => '5', 'Comment' => 'Pelayanan yang sangat baik dan kamar nyaman.', 'InputDate' => '2024-11-28', 'TravelType' => 'Business'],
            ['ReviewID' => 2, 'ReservationID' => 222, 'Rating' => '4', 'Comment' => 'Lokasi bagus, tapi kebersihan bisa ditingkatkan.', 'InputDate' => '2024-11-01', 'TravelType' => 'Others'],
            ['ReviewID' => 3, 'ReservationID' => 333, 'Rating' => '5', 'Comment' => 'Saya benar-benar menyukai penginapanku! Semuanya sempurna.', 'InputDate' => '2024-11-03', 'TravelType' => 'Education'],
            ['ReviewID' => 4, 'ReservationID' => 444, 'Rating' => '4', 'Comment' => 'Staf yang ramah dan fasilitas yang bagus.', 'InputDate' => '2024-11-02', 'TravelType' => 'Holiday'],
            ['ReviewID' => 5, 'ReservationID' => 555, 'Rating' => '3', 'Comment' => 'Pengalaman menginap yang lumayan, tapi Wi-Fi tidak stabil.', 'InputDate' => '2024-11-04', 'TravelType' => 'Business'],
        ]);
    }
}