<?php

use App\Models\buyTransaction;
use App\Models\payment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyTransactionPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_transaction_payment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buy_transaction_id')->constrained();
            $table->foreignId('payment_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('process_payment');
    }
}
