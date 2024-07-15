<?php

namespace App\Imports;

use App\Models\material;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;

class MaterialImport implements ToModel
{
    use Importable;

    // Pemetaan row Excel dengan row Database
    public function model(array $row)
    {
        try {
            return new material([
                'category_id' => $row[1],
                'code_material' => $row[2],
                'name_material' => $row[3],
                'unit_material' => $row[4],
                'ket_material' => $row[5],
            ]);
        } catch(\Exception $e){
            Log::error('Impor Excel Gagal: ' . $e->getMessage());
        }

    }
}
