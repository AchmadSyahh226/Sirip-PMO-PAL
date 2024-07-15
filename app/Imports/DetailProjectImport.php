<?php

namespace App\Imports;

use App\Models\buyTransaction;
use App\Models\payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;

class DetailProjectImport implements ToModel, WithValidation
{
    use Importable;

    public function rules():array {
        return [
            'date_transaction'=>'date_format:Y-m-d',
            'date_inquiry'=>'date_format:Y-m-d',
            'date_quotation'=>'date_format:Y-m-d',
            'date_evatek'=>'date_format:Y-m-d',
            'date_sign_contract'=>'date_format:Y-m-d',
            'date_payment'=>'date_format:Y-m-d',
            'date_fob'=>'date_format:Y-m-d',
            'date_cif'=>'date_format:Y-m-d',
            'date_franco'=>'date_format:Y-m-d',
            'date_instal'=>'date_format:Y-m-d'
        ];
    }

    // Menyesuaikan pemetaan antara kolom dalam file Excel dan atribut dalam model
    // public function map($row):array
    // {
    //     return [
    //         'date_transaction'=> null !== $row[1] ? Carbon::parse($row[1]) : null ,
    //         'project_id'=> $row[2],
    //         'material_id'=> $row[3],
    //         'idr_budget'=> $row[4],
    //         'usd_budget'=> $row[5],
    //         'idr_price_material'=> $row[6],
    //         'usd_price_material'=> $row[7],
    //         'idr_down_payment'=> $row[8],
    //         'usd_down_payment'=> $row[9],
    //         'idr_lc_skbdn'=> $row[10],
    //         'usd_lc_skbdn'=> $row[11],
    //         'idr_price_warranty'=> $row[12],
    //         'usd_price_warranty'=> $row[13],
    //     ];
    // }
    public function model(array $row)
    {
        try {
            return new buyTransaction([
                'date_transaction'=> null !== $row[1] ? Carbon::parse($row[1]) : null ,
                'project_id'=> $row[2],
                'material_id'=> $row[3],
                'idr_budget'=> $row[4],
                'usd_budget'=> $row[5],
                'idr_price_material'=> $row[6],
                'usd_price_material'=> $row[7],
                'idr_down_payment'=> $row[8],
                'usd_down_payment'=> $row[9],
                'idr_lc_skbdn'=> $row[10],
                'usd_lc_skbdn'=> $row[11],
                'idr_price_warranty'=> $row[12],
                'usd_price_warranty'=> $row[13],
                'date_inquiry'=> null !== $row[14] ? Carbon::parse($row[14]) : null ,
                'date_quotation'=> null !== $row[15] ? Carbon::parse($row[15]) : null ,
                'date_evatek'=> null !== $row[16] ? Carbon::parse($row[16]) : null ,
                'date_sign_contract'=> null !== $row[17] ? Carbon::parse($row[17]) : null ,
                'date_payment'=> null !== $row[18] ? Carbon::parse($row[18]) : null ,
                'date_fob'=> null !== $row[19] ? Carbon::parse($row[19]) : null ,
                'date_cif'=> null !== $row[20] ? Carbon::parse($row[20]) : null ,
                'date_franco'=> null !== $row[21] ? Carbon::parse($row[21]) : null ,
                'date_instal'=> null !== $row[22] ? Carbon::parse($row[22]) : null
            ]);

            // Simpan $transaction untuk mendapatkan ID yang baru dibuat
            // $transaction->save();

            // // Mengubah string menjadi array
            // $paymentIds = explode(',', $row[21]);

            // // Pengulangan dalam masukkan data payment
            // foreach ($paymentIds as $paymentId) {
            //     $payment = payment::firstOrCreate(['id' => $paymentId]);
            //     // Menambahkan relasi antara buyTransaction dan payment
            //     // Serta menyertakan buy_transaction_id
            //     $transaction->payment()->attach($payment);
            // }

            // Kembalikan nilai $transaction
            // return $transaction;

        } catch(\Exception $e) {
            Log::error('Impor Excel Gagal: ' . $e->getMessage());
        }

    }
}
