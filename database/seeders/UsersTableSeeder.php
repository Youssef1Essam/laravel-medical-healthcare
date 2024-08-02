<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'youssef',
            'email'=>'youssefessam@medical.com',
            'password'=>Hash::make('1234'),
            'created_at' => '2024-01-01',
            'updated_at' => now(),
        ]);
    }
}
