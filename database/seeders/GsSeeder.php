<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('gs_margonda')->insert([
            'gs_name' => 'Lunch box'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Plastik anti panas'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Plastik sampah'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Plastik es'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Mika besar'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Mika kecil'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Mika sedang'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Hand soap'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Hand bag besar'
        ]);

        DB::table('gs_margonda')->insert([
            'gs_name' => 'Hand bag sedang'
        ]);
    }
}
