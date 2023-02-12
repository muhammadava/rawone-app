<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('warehouses')->insert([
            'warehouse_name' => 'Kuah rawon'
        ]);

        DB::table('warehouses')->insert([
            'warehouse_name' => 'Dengkul'
        ]);

        DB::table('warehouses')->insert([
            'warehouse_name' => 'Daging'
        ]);
    }
}
