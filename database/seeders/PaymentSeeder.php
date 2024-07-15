<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('payments')->insert([
            'code_payment'=>'PAY001',
            'type_payment'=>'Kontrak',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY002',
            'type_payment'=>'Realisasi',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY003',
            'type_payment'=>'DP',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY004',
            'type_payment'=>'LC/SKBDN Batch 1',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY005',
            'type_payment'=>'LC/SKBDN Batch 1a',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY006',
            'type_payment'=>'LC/SKBDN Batch 2',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY007',
            'type_payment'=>'LC/SKBDN Batch 2a',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY008',
            'type_payment'=>'LC/SKBDN Batch 3',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY009',
            'type_payment'=>'LC/SKBDN Batch 3a',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY010',
            'type_payment'=>'LC/SKBDN Batch 4',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY011',
            'type_payment'=>'LC/SKBDN Batch 4a',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY012',
            'type_payment'=>'LC/SKBDN Batch 5',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY013',
            'type_payment'=>'LC/SKBDN Batch 5a',
        ]);
        DB::table('payments')->insert([
            'code_payment'=>'PAY014',
            'type_payment'=>'Warranty',
        ]);
    }
}
