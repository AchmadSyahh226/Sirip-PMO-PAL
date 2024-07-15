<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'code_project'=>'W000304',
            'name_project'=>'Kapal Frigate #1',
        ]);
        DB::table('projects')->insert([
            'code_project'=>'W000305',
            'name_project'=>'Kapal Frigate #2',
        ]);
        DB::table('projects')->insert([
            'code_project'=>'W000306',
            'name_project'=>'Kapal LD Philiphines #1',
        ]);
        DB::table('projects')->insert([
            'code_project'=>'W000307',
            'name_project'=>'Kapal LD Philiphines #2',
        ]);
        DB::table('projects')->insert([
            'code_project'=>'W000308',
            'name_project'=>'Kapal LPD Al-Mariah 163M',
        ]);
    }
}
