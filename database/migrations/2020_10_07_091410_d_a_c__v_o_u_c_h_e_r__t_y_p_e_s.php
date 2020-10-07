<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DACVOUCHERTYPES extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DAC_VOUCHER_TYPES', function (Blueprint $table) {
            $table->id('VOU_ID');
            $table->integer('VOU_PARENT_ID',true);
            $table->string('VOU_NAME');
            $table->string('VOU_PREFIX');
            $table->integer('LAST_NO');
            $table->boolean('DEFAULT');
            $table->string('SHORT_CUT');
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
        Schema::dropIfExists('DAC_VOUCHER_TYPES');
    }
}
