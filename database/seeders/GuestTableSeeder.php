<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Guest')->insert([
            ['NIKID' => 101, 'Name' => 'Ale', 'Email' => 'aleale@gmail.com', 'Phone' => '08123456789', 'Address' => 'Suite 839 Jl. Hayamwuruk No. 89, Berau, KU 39222', 'CreditCardNumber' => 1234],
            ['NIKID' => 102, 'Name' => 'Leo', 'Email' => 'leoamalia@yahoo.co.id', 'Phone' => '08789012345', 'Address' => 'Jl. MH. Thamrin No. 24, Sumbawa, KB 22844', 'CreditCardNumber' => 5689],
            ['NIKID' => 103, 'Name' => 'Lea', 'Email' => 'leavilia.jet@gmail.com', 'Phone' => '08134567890', 'Address' => 'Jl. Gajahmada No. 50, Jambi, SG 40689', 'CreditCardNumber' => 1357],
            ['NIKID' => 104, 'Name' => 'Satoru', 'Email' => 'satorusatria@gmail.com', 'Phone' => '08778901234', 'Address' => 'Jl. Hayamwuruk No. 30, Bitung, SL 21490', 'CreditCardNumber' => 2468],
            ['NIKID' => 105, 'Name' => 'Suguru', 'Email' => 'suguruarianto@student.telkomuniversity.ac.id', 'Phone' => '08156789012', 'Address' => 'Jl. Gatot Soebroto No. 70, Toba Samosir, JA 83706', 'CreditCardNumber' => 1987],
        ]);
    }
}