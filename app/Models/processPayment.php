<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class processPayment extends Model
{
    use HasFactory;
    protected $fillable = ['buy_transaction_id','payment_id'];
    protected $table = 'process_payment';
}
