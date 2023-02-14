<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('adm_margonda')->insert([
            'adm_name' => 'Bill order'
        ]);

        DB::table('adm_margonda')->insert([
            'adm_name' => 'Kertas file'
        ]);
    }
}
