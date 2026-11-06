<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::truncate();
        User::truncate();

        Customer::create(['full_name' => 'Miguel Pardo', 'email' => 'miguel@example.com', 'phone' => '111-1111']);
        Customer::create(['full_name' => 'Bob Jones', 'email' => 'bob@example.com', 'phone' => '555-0102']);
        Customer::create(['full_name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'phone' => '555-0103']);
        Customer::create(['full_name' => 'Diana Prince', 'email' => 'diana@example.com', 'phone' => '555-0104']);
        Customer::create(['full_name' => 'Ethan Hunt', 'email' => 'ethan@example.com', 'phone' => '555-0105']);
        User::create(['username' => 'asmith', 'full_name' => 'Alice Smith']);
        User::create(['username' => 'bjones', 'full_name' => 'Bob Jones']);
        User::create(['username' => 'cbrown', 'full_name' => 'Charlie Brown']);
        User::create(['username' => 'dprince', 'full_name' => 'Diana Prince']);
        User::create(['username' => 'ehunt', 'full_name' => 'Ethan Hunt']);
    }
}