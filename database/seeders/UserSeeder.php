<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'firstname' => 'admin',
            'lastname' => 'admin',
            'phone' => '04111222333',
            'address' => 'vasile conta 42 iasi',
            'avatar' => 'default.png',
            'password' => Hash::make('admin'),
        ]);

        $admin->assignRole('admin');

        $customer = User::create([
            'email' => 'customer@customer.com',
            'username' => 'customer',
            'firstname' => 'customer',
            'lastname' => 'customer',
            'phone' => '04111222333',
            'address' => 'vasile conta 42 iasi',
            'avatar' => 'default.png',
            'password' => Hash::make('customer'),

        ]);

        $admin->assignRole('customer');
    }
}
