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
            'name' => 'market'
        ]);

        DB::table('categories')->insert([
            'name' => 'outlet'
        ]);

        DB::table('categories')->insert([
            'name' => 'warehouse'
        ]);

        DB::table('categories')->insert([
            'name' => 'margonda'
        ]);

        DB::table('categories')->insert([
            'name' => 'kelapa_gading'
        ]);

        DB::table('categories')->insert([
            'name' => 'simatupang'
        ]);

        DB::table('categories')->insert([
            'name' => 'warehouse_daily'
        ]);

        DB::table('categories')->insert([
            'name' => 'sales'
        ]);
    }
}
