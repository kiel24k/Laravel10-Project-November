<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\shop;

class shhopone extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        shop::factory()
        ->count(12)
        ->create();
    }
}
