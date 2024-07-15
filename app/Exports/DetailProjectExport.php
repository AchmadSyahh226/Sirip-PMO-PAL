<?php

namespace App\Exports;

use App\Models\buyTransaction;
use Maatwebsite\Excel\Concerns\FromQuery;

class DetailProjectExport implements FromQuery
{
    public function query()
    {
        return buyTransaction::query()->with('payment');
    }
}
