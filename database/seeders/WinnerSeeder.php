<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WinnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('winners')->insert([
            'name' => 'Lamborghini Huracan',
            'prize_code' => 'C1Z1',
            'ticket_number' => '565228',
            'winner_id' => '1',
            'winner_name' => 'Admin',
            'description' => 'some description',
            'details' => 'Model: Huracan',
            'category_id' => '1',
            'date' => Carbon::create('2022', '06', '06'),
        ]);
    }
}