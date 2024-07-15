<?php

use App\Models\material;
use App\Models\payment;
use App\Models\project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_transactions', function (Blueprint $table) {
            $table->id();
            $table->date('date_transaction')->nullable();
            $table->foreignId('project_id')->constrained();
            $table->foreignId('material_id')->constrained();
            $table->string('idr_budget')->nullable();
            $table->string('usd_budget')->nullable();
            $table->string('idr_price_material')->nullable();
            $table->string('usd_price_material')->nullable();
            $table->string('idr_down_payment')->nullable();
            $table->string('usd_down_payment')->nullable();
            $table->string('idr_lc_skbdn')->nullable();
            $table->string('usd_lc_skbdn')->nullable();
            $table->string('idr_price_warranty')->nullable();
            $table->string('usd_price_warranty')->nullable();
            $table->date('date_inquiry')->nullable();
            $table->date('date_quotation')->nullable();
            $table->date('date_evatek')->nullable();
            $table->date('date_sign_contract')->nullable();
            $table->date('date_payment')->nullable();
            $table->date('date_fob')->nullable();
            $table->date('date_cif')->nullable();
            $table->date('date_franco')->nullable();
            $table->date('date_instal')->nullable();
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
        Schema::dropIfExists('buy_transaction');
    }
}
