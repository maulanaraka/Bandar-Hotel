<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Billing;
Use App\Models\Guest;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Room;


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
            ['RoomNumber' => '100', 'RoomType' => 'Standard Room', 'Rate' => 1000000, 'Availability' => 'Occupied', 'Insurance' => '305'],
            ['RoomNumber' => '101', 'RoomType' => 'Standard Room', 'Rate' => 1000000, 'Availability' => 'Occupied', 'Insurance' => '306'],
            ['RoomNumber' => '200', 'RoomType' => 'Superior Room', 'Rate' => 2000000, 'Availability' => 'Empty', 'Insurance' => '307'],
            ['RoomNumber' => '201', 'RoomType' => 'Superior Room', 'Rate' => 2000000, 'Availability' => 'Maintenance', 'Insurance' => '308'],
            ['RoomNumber' => '300', 'RoomType' => 'Kings Room', 'Rate' => 3000000, 'Availability' => 'Occupied', 'Insurance' => '309'],
        ]);

        Guest::insert([
            ['NIKID' => 101, 'Name' => 'Ale', 'Email' => 'aleale@gmail.com', 'Phone' => '08123456789', 'Address' => 'Suite 839 Jl. Hayamwuruk No. 89, Berau, KU 39222', 'CreditCardNumber' => '1234'],
            ['NIKID' => 102, 'Name' => 'Leo', 'Email' => 'leoamalia@yahoo.co.id', 'Phone' => '08789012345', 'Address' => 'Jl. MH. Thamrin No. 24, Sumbawa, KB 22844', 'CreditCardNumber' => '5689'],
            ['NIKID' => 103, 'Name' => 'Lea', 'Email' => 'leavilia.jet@gmail.com', 'Phone' => '08134567890', 'Address' => 'Jl. Gajahmada No. 50, Jambi, SG 40689', 'CreditCardNumber' => '1357'],
            ['NIKID' => 104, 'Name' => 'Satoru', 'Email' => 'satorusatria@gmail.com', 'Phone' => '08778901234', 'Address' => 'Jl. Hayamwuruk No. 30, Bitung, SL 21490', 'CreditCardNumber' => '2468'],
            ['NIKID' => 105, 'Name' => 'Suguru', 'Email' => 'suguruarianto@student.telkomuniversity.ac.id', 'Phone' => '08156789012', 'Address' => 'Jl. Gatot Soebroto No. 70, Toba Samosir, JA 83706', 'CreditCardNumber' => '1987'],
        ]);

        Reservation::insert([
            ['NIKID' => 101, 'RoomID' => 1, 'CheckInDate' => '2024-10-27', 'CheckOutDate' => '2024-10-28', 'TotalAmount' => 1000000, 'idPenyewaanMobil' => '001'],
            ['NIKID' => 102, 'RoomID' => 2, 'CheckInDate' => '2024-10-31', 'CheckOutDate' => '2024-11-01', 'TotalAmount' => 1000000, 'idPenyewaanMobil' => '002'],
            ['NIKID' => 103, 'RoomID' => 3, 'CheckInDate' => '2024-11-01', 'CheckOutDate' => '2024-11-03', 'TotalAmount' => 4000000, 'idPenyewaanMobil' => '003'],
            ['NIKID' => 104, 'RoomID' => 4, 'CheckInDate' => '2024-11-01', 'CheckOutDate' => '2024-11-02', 'TotalAmount' => 2000000, 'idPenyewaanMobil' => '004'],
            ['NIKID' => 105, 'RoomID' => 5, 'CheckInDate' => '2024-11-02', 'CheckOutDate' => '2024-11-04', 'TotalAmount' => 6000000, 'idPenyewaanMobil' => '005'],
        ]);

        Review::insert([
            ['ReservationID' => 1, 'Rating' => 5, 'Comment' => 'Pelayanan yang sangat baik dan kamar nyaman.', 'InputDate' => '2024-11-28', 'TravelType' => 'Business'],
            ['ReservationID' => 2, 'Rating' => 4, 'Comment' => 'Lokasi bagus, tapi kebersihan bisa ditingkatkan.', 'InputDate' => '2024-11-01', 'TravelType' => 'Others'],
            ['ReservationID' => 3, 'Rating' => 5, 'Comment' => 'Saya benar-benar menyukai penginapanku! Semuanya sempurna.', 'InputDate' => '2024-11-03', 'TravelType' => 'Education'],
            ['ReservationID' => 4, 'Rating' => 4, 'Comment' => 'Staf yang ramah dan fasilitas yang bagus.', 'InputDate' => '2024-11-02', 'TravelType' => 'Holiday'],
            ['ReservationID' => 5, 'Rating' => 3, 'Comment' => 'Pengalaman menginap yang lumayan, tapi Wi-Fi tidak stabil.', 'InputDate' => '2024-11-04', 'TravelType' => 'Business'],
        ]);
        
        Billing::insert([
            ['ReservationID' => 1, 'TotalAmount' => 1000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1234],
            ['ReservationID' => 2, 'TotalAmount' => 1000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 5689],
            ['ReservationID' => 3, 'TotalAmount' => 4000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1357],
            ['ReservationID' => 4, 'TotalAmount' => 2000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 2468],
            ['ReservationID' => 5, 'TotalAmount' => 6000000, 'PaymentStatus' => 'Paid', 'CreditCardNumber' => 1987],
        ]);


    }
}
