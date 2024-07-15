<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = ['code_payment','type_payment'];
    protected $table = 'payments';

    public function transaction()
    {
        return $this->belongsToMany(buyTransaction::class);
    }
}
