<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'cars',
            'parent_id' => '1'
        ]);
        Category::create([
            'name' => 'bikes',
            'parent_id' => '1'
        ]);
        Category::create([
            'name' => 'Phones',
            'parent_id' => '1'
        ]);
        Category::create([
            'name' => 'Watches',
            'parent_id' => '1'
        ]);
        Category::create([
            'name' => 'Laptops',
            'parent_id' => '1'
        ]);
        Category::create([
            'name' => 'Money',
            'parent_id' => '1'
        ]);
    }
}