<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Item::factory()
            ->count(20)
            ->create();

    }
}
