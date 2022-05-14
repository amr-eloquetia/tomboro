<?php

namespace Database\Seeders;

use App\Models\Prizes;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prizes')->insert([
            'name' => 'test prize',
            'prize_code' => '123123',
            'ticket_amount' => '10000',
            'ticket_price' => '10',
            'prize_date' => Carbon::create('2022', '05', '05'),
            'description' => 'test description',
            'details' => 'test details',
            'category_id' => '1'
        ]);
        DB::table('prizes')->insert([
            'name' => 'test prize2',
            'prize_code' => '221212',
            'ticket_amount' => '1000',
            'ticket_price' => '5',
            'prize_date' => Carbon::create('2022', '05', '05'),
            'description' => 'test2 description',
            'details' => 'test2 details',
            'category_id' => '2'
        ]);
        DB::table('prizes')->insert([
            'name' => 'test prize3',
            'prize_code' => '998989',
            'ticket_amount' => '100000',
            'ticket_price' => '7',
            'prize_date' => Carbon::create('2022', '05', '05'),
            'description' => 'test3 description',
            'details' => 'test3 details',
            'category_id' => '1'
        ]);
    }
}
