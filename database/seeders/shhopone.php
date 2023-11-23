<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\shop;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class shhopone extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // shop::factory()
        // ->count(12)
        // ->create();

        DB::table('alluser')->insert([
            //Admin
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('111'),
        ]);
    }
}
