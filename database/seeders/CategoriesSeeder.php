<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categories')->insert([
            'times_id' => 1,
            'name' => 'market'
        ]);

        DB::table('categories')->insert([
            'times_id' => 2,
            'name' => 'outlet'
        ]);

        DB::table('categories')->insert([
            'times_id' => 3,
            'name' => 'warehouse'
        ]);

        DB::table('categories')->insert([
            'times_id' => 4,
            'name' => 'margonda'
        ]);

        DB::table('categories')->insert([
            'times_id' => 5,
            'name' => 'kelapa_gading'
        ]);

        DB::table('categories')->insert([
            'times_id' => 6,
            'name' => 'simatupang'
        ]);

        DB::table('categories')->insert([
            'times_id' => 7,
            'name' => 'warehouse_daily'
        ]);

        DB::table('categories')->insert([
            'times_id' => 8,
            'name' => 'sales'
        ]);
    }
}
