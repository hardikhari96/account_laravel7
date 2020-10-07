<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DACRECPAYS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DAC_REC_PAYS', function (Blueprint $table) {
            $table->id('YEAR_ID');
            $table->string('TRANS_NO');
            $table->string('VOUCHER_TYPE');
            $table->string('VOUCHER_DATE');
            $table->string('CASH_AC_CODE');
            $table->string('CHEQUE_DD_NO');
            $table->string('PARAM_AC_CODE');
            $table->string('FATHER_NAME');
            $table->string('PARTY_NAME');
            $table->string('PARTY_ADD');
            $table->string('REMARK');
            $table->string('AMOUNT');
            $table->string('CASE_NO');
            $table->string('IS_DONATIION');
            $table->string('IS_DEPOSITE');
            $table->string('DONATION_CODE');
            $table->string('FUNCTION_DT');
            $table->string('photo');
            $table->string('sign');
            $table->string('signF');
            $table->string('mother_age');
            $table->string('deliType');
            $table->string('DELIVERY_TIME');
            $table->string('DISCHARGE_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DAC_REC_PAYS');
    }
}
