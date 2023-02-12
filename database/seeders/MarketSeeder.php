<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('markets')->insert([
            'market_name' => 'Timun'
        ]);

        DB::table('markets')->insert([
            'market_name' => 'Tomat'
        ]);

        DB::table('markets')->insert([
            'market_name' => 'Wortel'
        ]);
    }
}
