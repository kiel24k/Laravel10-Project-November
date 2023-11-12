<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('shop_user')->insert(
            //Admin
             [
                'game_id' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('111'),
             ]);



    }
}
