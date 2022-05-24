<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create(
            [
                'path' => 'prize_images/huracan.jpg',
                'prize_id' => '1',
                'priority' => '0'
            ]
        );
        Media::create(
            [
                'path' => 'prize_images/Yamaha_YZF_R1.jpg',
                'prize_id' => '2',
                'priority' => '0'
            ]
        );
        Media::create(
            [
                'path' => 'prize_images/iphone13_pro_max.jpg',
                'prize_id' => '3',
                'priority' => '0'
            ]
        );
        Media::create(
            [
                'path' => 'prize_images/Macbook_m1.jpg',
                'prize_id' => '4',
                'priority' => '0'
            ]
        );
    }
}