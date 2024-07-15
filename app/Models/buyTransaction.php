<?php

namespace App\Models;

use App\Traits\HasFormatCHF;
use App\Traits\HasFormatEUR;
use App\Traits\HasFormatGBP;
use App\Traits\HasFormatNOK;
use App\Traits\HasFormatRupiah;
use App\Traits\HasFormatSGD;
use App\Traits\HasFormatUSD;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyTransaction extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    use HasFormatUSD;

    protected $fillable = [
        'date_transaction',
        'project_id',
        'material_id',
        'idr_budget',
        'usd_budget',
        'idr_price_material',
        'usd_price_material',
        'idr_down_payment',
        'usd_down_payment',
        'idr_lc_skbdn',
        'usd_lc_skbdn',
        'idr_price_warranty',
        'usd_price_warranty',
        'date_inquiry',
        'date_quotation',
        'date_evatek',
        'date_sign_contract',
        'date_payment',
        'date_fob',
        'date_cif',
        'date_franco',
        'date_instal'
    ];
    protected $table = 'buy_transactions';
    public function projects()
    {
        return $this->belongsTo(project::class);
    }

    public function material()
    {
        return $this->belongsTo(material::class);
    }
    public function payment()
    {
        return $this->belongsToMany(payment::class);
    }
}
