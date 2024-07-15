<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'code_category'=>'CAT001',
            'name_category'=>'Row-Material',
            'ket_category'=>'Material Belum Jadi'
        ]);
        DB::table('categories')->insert([
            'code_category'=>'CAT002',
            'name_category'=>'Equipment',
            'ket_category'=>'Material Jadi'
        ]);
        DB::table('categories')->insert([
            'code_category'=>'CAT003',
            'name_category'=>'Consumable',
            'ket_category'=>'Material Habis Pakai'
        ]);
    }
}
