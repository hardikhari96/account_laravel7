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
            $table->integer('TRANS_NO');
            $table->integer('VOUCHER_TYPE');
            $table->date('VOUCHER_DATE');
            $table->smallInteger('CASH_AC_CODE');
            $table->string('CHEQUE_DD_NO',50);
            $table->smallInteger('PARAM_AC_CODE');
            $table->string('FATHER_NAME',150);
            $table->string('PARTY_NAME',150);
            $table->string('PARTY_ADD',255);
            $table->string('REMARK',255);
            $table->integer('AMOUNT');
            $table->string('CASE_NO');
            $table->boolean('IS_DONATIION');
            $table->boolean('IS_DEPOSITE');
            $table->integer('DONATION_CODE');
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
