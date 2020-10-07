<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DACACCOUNTTYPES extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DAC_ACCOUNT_TYPES', function (Blueprint $table) {
            $table->id();
            $table->integer('AC_TYPE_ID',true);
            $table->string('AC_TYPE_NAME')->unique();
            $table->string('PARENT_TYPE')->nullable();
            $table->string('DR_CR')->nullable();;
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
        Schema::dropIfExists('DAC_ACCOUNT_TYPES');
    }
}
