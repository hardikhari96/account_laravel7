<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DACTRANSACTIONDETAILS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DAC_TRANSACTION_DETAILS', function (Blueprint $table) {
            $table->id('YEAR_ID');
            $table->integer('YEAR_ID');
            $table->integer('TRANS_NO');
            $table->integer('AMOUNT_D');
            $table->integer('AMOUNT_C');
            $table->integer('AC_CODE');
            $table->string('DR_CR');
            $table->boolean('IS_CLEARED')->default(0);
            $table->boolean('IS_CHECKED')->default(0);
            $table->date('CLEAR_DATE');
            $table->string('CLEAR_REMARK')->nullable();;
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
        Schema::dropIfExists('DAC_TRANSACTION_DETAILS');
    }
}
