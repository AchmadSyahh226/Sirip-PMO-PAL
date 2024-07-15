<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MilestoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('milestones')->insert([
            'name_milestone'=>'Inquiry',
            'ket_milestone'=>'Proses Pencarian Vendor/Supplier',
            'percent_milestone'=>'5%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Quotation',
            'ket_milestone'=>'-',
            'percent_milestone'=>'10%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Technical Evaluation',
            'ket_milestone'=>'Review Desain Material',
            'percent_milestone'=>'15%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Signing Contract',
            'ket_milestone'=>'Mulai Kontrak Dengan Supplier',
            'percent_milestone'=>'25%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Payment',
            'ket_milestone'=>'Proses Pembayaran',
            'percent_milestone'=>'50%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Free On Board (FOB)',
            'ket_milestone'=>'Pembelian Material Dalam Negeri',
            'percent_milestone'=>'55%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Country In Freight',
            'ket_milestone'=>'Pembelian Material Luar Negeri',
            'percent_milestone'=>'75%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Arrival at PT PAL (Franco PAL)',
            'ket_milestone'=>'Material Telah Datang di PT PAL Indonesia',
            'percent_milestone'=>'90%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Ready To Install',
            'ket_milestone'=>'Material Siap Untuk Digunakan',
            'percent_milestone'=>'100%'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'First Steel Cutting',
            'ket_milestone'=>'Pemotongan Material Pertama',
            'percent_milestone'=>'-'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Keel Laying',
            'ket_milestone'=>'-',
            'percent_milestone'=>'-'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'M/E Loading',
            'ket_milestone'=>'-',
            'percent_milestone'=>'-'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Launching',
            'ket_milestone'=>'Peresmian Penggunaan Kapal',
            'percent_milestone'=>'-'
        ]);
        DB::table('milestones')->insert([
            'name_milestone'=>'Sea Trial',
            'ket_milestone'=>'Percobaan Penggunaan Kapal di Laut',
            'percent_milestone'=>'-'
        ]);
    }
}
