<?php

namespace Database\Seeders;

use App\Models\Tickets;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 12; $i++) {
            Tickets::create([
                'ticket_number' => random_int(100000, 999999),
                'price' => '10',
                'availability' => '1',
                'prize_id' => '1',
                'owner_id' => '0'
            ]);
        }
        for ($i = 0; $i < 12; $i++) {
            Tickets::create([
                'ticket_number' => random_int(100000, 999999),
                'price' => '5',
                'availability' => '1',
                'prize_id' => '2',
                'owner_id' => '0'

            ]);
        }
        for ($i = 0; $i < 12; $i++) {
            Tickets::create([
                'ticket_number' => random_int(100000, 999999),
                'price' => '7',
                'availability' => '1',
                'prize_id' => '3',
                'owner_id' => '0'

            ]);
        }
    }
}
