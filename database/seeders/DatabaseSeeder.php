<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Billing;
Use app\Models\Guest;
use app\Models\Reservation;
use app\Models\Review;
use app\Models\Room;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Room::insert([
            ['RoomID' => 100, 'RoomNumber' => 1, 'RoomType' => 'Standard Room', 'Rate' => 1000000, 'Availability' => 'Occupied', 'Insurance' => 305],
            ['RoomID' => 101, 'RoomNumber' => 2, 'RoomType' => 'Standard Room', 'Rate' => 1000000, 'Availability' => 'Occupied', 'Insurance' => 306],
            ['RoomID' => 200, 'RoomNumber' => 3, 'RoomType' => 'Superior Room', 'Rate' => 2000000, 'Availability' => 'Empty', 'Insurance' => 307],
            ['RoomID' => 201, 'RoomNumber' => 4, 'RoomType' => 'Superior Room', 'Rate' => 2000000, 'Availability' => 'Maintenance', 'Insurance' => 308],
            ['RoomID' => 300, 'RoomNumber' => 5, 'RoomType' => 'Kings Room', 'Rate' => 3000000, 'Availability' => 'Occupied', 'Insurance' => 309],
        ]);

        Guest::insert([
            ['NIKID' => 101, 'Name' => 'Ale', 'Email' => 'aleale@gmail.com', 'Phone' => '08123456789', 'Address' => 'Suite 839 Jl. Hayamwuruk No. 89, Berau, KU 39222', 'CreditCardNumber' => 1234],
            ['NIKID' => 102, 'Name' => 'Leo', 'Email' => 'leoamalia@yahoo.co.id', 'Phone' => '08789012345', 'Address' => 'Jl. MH. Thamrin No. 24, Sumbawa, KB 22844', 'CreditCardNumber' => 5689],
            ['NIKID' => 103, 'Name' => 'Lea', 'Email' => 'leavilia.jet@gmail.com', 'Phone' => '08134567890', 'Address' => 'Jl. Gajahmada No. 50, Jambi, SG 40689', 'CreditCardNumber' => 1357],
            ['NIKID' => 104, 'Name' => 'Satoru', 'Email' => 'satorusatria@gmail.com', 'Phone' => '08778901234', 'Address' => 'Jl. Hayamwuruk No. 30, Bitung, SL 21490', 'CreditCardNumber' => 2468],
            ['NIKID' => 105, 'Name' => 'Suguru', 'Email' => 'suguruarianto@student.telkomuniversity.ac.id', 'Phone' => '08156789012', 'Address' => 'Jl. Gatot Soebroto No. 70, Toba Samosir, JA 83706', 'CreditCardNumber' => 1987],
        ]);

        Reservation::insert([
            ['ReservationID' => 111, 'NIKID' => 101, 'RoomID' => 100, 'CheckInDate' => '2024-10-27', 'CheckOutDate' => '2024-10-28', 'TotalAmount' => 1000000, 'idPenyewaanMobil' => '001'],
            ['ReservationID' => 222, 'NIKID' => 102, 'RoomID' => 101, 'CheckInDate' => '2024-10-31', 'CheckOutDate' => '2024-11-01', 'TotalAmount' => 1000000, 'idPenyewaanMobil' => '002'],
            ['ReservationID' => 333, 'NIKID' => 103, 'RoomID' => 200, 'CheckInDate' => '2024-11-01', 'CheckOutDate' => '2024-11-03', 'TotalAmount' => 4000000, 'idPenyewaanMobil' => '003'],
            ['ReservationID' => 444, 'NIKID' => 104, 'RoomID' => 201, 'CheckInDate' => '2024-11-01', 'CheckOutDate' => '2024-11-02', 'TotalAmount' => 2000000, 'idPenyewaanMobil' => '004'],
            ['ReservationID' => 555, 'NIKID' => 105, 'RoomID' => 300, 'CheckInDate' => '2024-11-02', 'CheckOutDate' => '2024-11-04', 'TotalAmount' => 6000000, 'idPenyewaanMobil' => '005'],
        ]);

        Review::insert([
            ['ReviewID' => 1, 'ReservationID' => 111, 'Rating' => '5', 'Comment' => 'Pelayanan yang sangat baik dan kamar nyaman.', 'InputDate' => '2024-11-28', 'TravelType' => 'Business'],
            ['ReviewID' => 2, 'ReservationID' => 222, 'Rating' => '4', 'Comment' => 'Lokasi bagus, tapi kebersihan bisa ditingkatkan.', 'InputDate' => '2024-11-01', 'TravelType' => 'Others'],
            ['ReviewID' => 3, 'ReservationID' => 333, 'Rating' => '5', 'Comment' => 'Saya benar-benar menyukai penginapanku! Semuanya sempurna.', 'InputDate' => '2024-11-03', 'TravelType' => 'Education'],
            ['ReviewID' => 4, 'ReservationID' => 444, 'Rating' => '4', 'Comment' => 'Staf yang ramah dan fasilitas yang bagus.', 'InputDate' => '2024-11-02', 'TravelType' => 'Holiday'],
            ['ReviewID' => 5, 'ReservationID' => 555, 'Rating' => '3', 'Comment' => 'Pengalaman menginap yang lumayan, tapi Wi-Fi tidak stabil.', 'InputDate' => '2024-11-04', 'TravelType' => 'Business'],
        ]);
        
        Billing::insert([
            ['BillID' => 123456, 'ReservationID' => 111, 'TotalAmount' => 1000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1234],
            ['BillID' => 123457, 'ReservationID' => 222, 'TotalAmount' => 1000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 5689],
            ['BillID' => 123458, 'ReservationID' => 333, 'TotalAmount' => 4000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1357],
            ['BillID' => 123459, 'ReservationID' => 444, 'TotalAmount' => 2000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 2468],
            ['BillID' => 123460, 'ReservationID' => 555, 'TotalAmount' => 6000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1987],
        ]);


    }
}
