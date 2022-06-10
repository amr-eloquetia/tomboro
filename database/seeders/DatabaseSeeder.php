<?php

namespace Database\Seeders;

use Faker\Provider\Medical;
use Illuminate\Database\Seeder;


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
            PermissionsSeeder::class,
            UserSeeder::class,
            PrizeSeeder::class,
            CategorySeeder::class,
            TicketSeeder::class,
            MediaSeeder::class,
            WinnerSeeder::class,
        ]);
    }
}