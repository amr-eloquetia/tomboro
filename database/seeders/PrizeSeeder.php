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
            'name' => 'Lamborghini Huracan',
            'prize_code' => '106456',
            'ticket_amount' => '100000',
            'ticket_price' => '50',
            'prize_date' => Carbon::create('2022', '06', '06'),
            'description' => 'Vrei un Lamborghini Huracan LP 610-4? Joaca si castiga cu Tomboro!',
            'details' => 'Model: Huracan
            Versiune: EVO
            Anul: 2020
            Combustibil: Benzina
            Putere: 640 CP
            Transmisie: 4x4
            Norma de poluare: Euro 6
            Cutie de viteze: Automata
            Tip Caroserie: Coupe
            Numar de portiere: 2
            Culoare: Gri
            ',
            'category_id' => '1'
        ]);
        DB::table('prizes')->insert([
            'name' => 'Yamaha YZF-R1',
            'prize_code' => '206456',
            'ticket_amount' => '10000',
            'ticket_price' => '20',
            'prize_date' => Carbon::create('2022', '06', '06'),
            'description' => 'Joaca si castiga acest Yamaha YZF-R1!',
            'details' => 'Model: YZF-R1
            Versiune: V2
            Anul: 2020
            Combustibil: Benzina
            Putere: 650 CP',
            'category_id' => '2'
        ]);
        DB::table('prizes')->insert([
            'name' => 'Iphone 13 PRO MAX',
            'prize_code' => '306235',
            'ticket_amount' => '1000',
            'ticket_price' => '10',
            'prize_date' => Carbon::create('2022', '06', '06'),
            'description' => 'Poti castiga acest Iphone 13 PRO MAX doar daca participi acum la concursul nostru!',
            'details' => 'Brand: Apple
            Sloturi SIM: Dual SIM
            Sistem de operare: IOS
            Versiune sistem operare: IOS 15
            Culoare: Auriu
            Dimensiuni: 78.1 x 7.65 x 160.8 mm
            Greutate: 240 g
            An aparitie: 2021
            Memorie internă: 256 GB
            Număr camere: 3
            ',
            'category_id' => '3'
        ]);
        DB::table('prizes')->insert([
            'name' => 'Macbook m1',
            'prize_code' => '406242',
            'ticket_amount' => '1000',
            'ticket_price' => '10',
            'prize_date' => Carbon::create('2022', '06', '06'),
            'description' => 'Castiga acest Macbook m1 2021 simplu si usor!',
            'details' => 'Brand: Apple
            Rezoluție: 3024 x 1964
            Capacitate memorie: 16GB
            Memorie integrată: 16384 MB
            Cameră WEB: HD
            Audio: Difuzoare stereo, Trei microfoane
            Greutate: 1,6 Kg
            Dimensiuni: 312.6 x 221.2 x 15.5 mm
            Limbă tastatură: Tastaturp internațională
            Guloare: Space Grey
            ',
            'category_id' => '5'
        ]);

    }
}