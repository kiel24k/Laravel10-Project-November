<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\shop;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        shop::factory()
        ->count(10)
        ->create();
        // DB::table('shop_user')->insert([
        //     'game_id' => str::random(10),
        //     'email' => str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
        //  shop::factory()
        //     ->count(50)
        //     ->hasPosts(1)
        //     ->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
