<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutletSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('outlets')->insert([
            'outlet_name' => 'Roti tawar'
        ]);

        DB::table('outlets')->insert([
            'outlet_name' => 'Es batu'
        ]);

        DB::table('outlets')->insert([
            'outlet_name' => 'Freshmilk'
        ]);
    }
}
