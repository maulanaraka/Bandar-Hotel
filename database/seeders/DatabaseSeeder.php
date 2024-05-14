<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GuestTableSeeder;
use Database\Seeders\ReservationTableSeeder;
use Database\Seeders\ReviewTableSeeder;
use Database\Seeders\RoomsTableSeeder;
use Database\Seeders\BillingTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GuestTableSeeder::class,
            ReservationTableSeeder::class,
            ReviewTableSeeder::class,
            RoomsTableSeeder::class,
            BillingTableSeeder::class,
        ]);
    }
}