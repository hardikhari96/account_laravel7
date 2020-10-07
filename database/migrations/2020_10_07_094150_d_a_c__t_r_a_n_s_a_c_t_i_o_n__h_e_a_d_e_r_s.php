<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DACTRANSACTIONHEADERS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DAC_TRANSACTION_HEADERS', function (Blueprint $table) {
            $table->id('YEAR_ID');
            $table->foreign('YEAR_ID')->references('GEN_COMP_YEARS')->on('YEAR_ID');
            $table->integer('TRANS_NO',true);
            $table->string('VOUCHER_TYPE');
            $table->foreign('VOUCHER_TYPE')->references('DAC_VOUCHER_TYPES')->on('VOU_ID');
            $table->string('VOUCHER_NO');
            $table->integer('VOUCHER_DATE');
            $table->boolean('NARRATION');
            $table->string('APP_ID');
            $table->string('REFERANCE_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DAC_VOUCHER_TYPES');
    }
}
