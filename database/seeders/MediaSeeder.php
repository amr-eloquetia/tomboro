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
                'path' => 'prize_images/default1.png',
                'prize_id' => '1',
                'priority' => '0'
            ]
        );
        Media::create(
            [
                'path' => 'prize_images/default1.png',
                'prize_id' => '2',
                'priority' => '0'
            ]
        );
        Media::create(
            [
                'path' => 'prize_images/default1.png',
                'prize_id' => '3',
                'priority' => '0'
            ]
        );
    }
}
