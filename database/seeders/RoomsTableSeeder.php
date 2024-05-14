<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Rooms')->insert([
            ['RoomID' => 100, 'RoomNumber' => 1, 'RoomType' => 'Standard Room', 'Rate' => 1000000, 'Availability' => 'Occupied', 'Insurance' => 305],
            ['RoomID' => 101, 'RoomNumber' => 2, 'RoomType' => 'Standard Room', 'Rate' => 1000000, 'Availability' => 'Occupied', 'Insurance' => 306],
            ['RoomID' => 200, 'RoomNumber' => 3, 'RoomType' => 'Superior Room', 'Rate' => 2000000, 'Availability' => 'Empty', 'Insurance' => 307],
            ['RoomID' => 201, 'RoomNumber' => 4, 'RoomType' => 'Superior Room', 'Rate' => 2000000, 'Availability' => 'Maintenance', 'Insurance' => 308],
            ['RoomID' => 300, 'RoomNumber' => 5, 'RoomType' => 'Kings Room', 'Rate' => 3000000, 'Availability' => 'Occupied', 'Insurance' => 309],
        ]);
    }
}