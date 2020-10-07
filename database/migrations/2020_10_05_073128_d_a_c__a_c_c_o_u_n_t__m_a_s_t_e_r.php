<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DACACCOUNTMASTER extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DAC_ACCOUNT_MASTERS', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('AC_CODE');
            $table->smallInteger('AC_PARENT');
            $table->integer('AC_TYPE');
            $table->smallInteger('G_A');
            $table->string('AC_NAME');
            $table->string('NATURE');
            $table->integer('TREE_LEVEL');
            $table->boolean('SYSTEM_AC');
            $table->string('ALIAS');
            $table->string('AC_BILL_NAME');
            $table->float('LAST_YEAR_OB');
            $table->integer('OPENING_BALANCE');
            $table->integer('TOTAL_DEBIT');
            $table->integer('TOTAL_CREDIT');
            $table->integer('CLOSING_BALANCE');
            $table->integer('DEBIT_LIMIT');
            $table->integer('CREDIT_LIMIT');
            $table->boolean('RESTRICT_TRANS_ENTRY');
            $table->integer('TRN_DEBIT_LIMIT');
            $table->integer('TRN_CREDIT_LIMIT');
            $table->string('ADD');
            $table->integer('ZIP_ID');
            $table->smallInteger('CITY_ID');
            $table->smallInteger('STATE_ID');
            $table->smallInteger('COUNTRY_ID');
            $table->string('PHONE');
            $table->string('FAX');
            $table->string('PAN');
            $table->string('EMAIL');
            $table->string('CONTACT_PERSON');
            $table->string('PUB_LIC_NO');
            $table->string('CST_NO');
            $table->string('STATE_ST_NO');
            $table->boolean('IS_BILL_BY_BILL');
            $table->string('REMARK');
            $table->integer('CREDIT_DAYS_LIMIT');
            $table->string('SERVICE_TAX_NO');
            $table->string('MEMBERID');
            $table->date('DOB');
            $table->date('ANIVERSERY');
            $table->integer('SALARY');
            $table->char('sex');
            $table->string('SSN');
            $table->string('NICK_NAME');
            $table->integer('For115');
            $table->integer('For1631');
            $table->boolean('Locked');
            $table->integer('SDocID');
            $table->string('SupplierType');
            $table->string('AirlinePref');
            $table->string('AirlineCode');
            $table->integer('CRBasic');
            $table->boolean('HoldingStock');
            $table->boolean('BSPStock');
            $table->boolean('SpecStock');
            $table->integer('Above31');
            $table->integer('Interest');
            $table->string('SupplierCode');
            $table->string('PHONE2');
            $table->string('FAX2');
            $table->string('MOBILE_NO');
            $table->string('PHONE_CODE');
            $table->string('FAX_CODE');
            $table->date('CST_DATE');
            $table->string('VAT_NO');
            $table->date('VAT_DATE');
            $table->string('TIN_NO');
            $table->string('ECC_NO');
            $table->string('SME_REG_NO');
            $table->date('SME_DATE');
            $table->string('FILE_NAME');
            $table->string('JOURNALVOU');
            $table->string('BANK_DETAIL');
            $table->string('OFFICIAL_WEB_SITE');
            $table->string('EMERGENCY_CONTACT');
            $table->string('REFERRED_BY');
            $table->string('ADDITIONAL_COMM1');
            $table->string('ADDITIONAL_COMM2');
            $table->string('ADDITIONAL_COMM3');
            $table->string('NAME_OF_SISTER_CONCERNS');
            $table->string('POST_BOX_NO');
            $table->boolean('MODE_OF_PAYMENT_CASH');
            $table->boolean('MODE_OF_PAYMENT_CHEQUE');
            $table->boolean('MODE_OF_PAYMENT_BANK_AC_TRANSFER');
            $table->boolean('MODE_OF_PAYMENT_CREDIT_CARD');
            $table->boolean('MODE_OF_PAYMENT_ONLINE_TRANSFER');
            $table->string('TRADE_LICENCE_COPY');
            $table->string('PASSPORT_COPY');
            $table->binary('GURANTEE_CHEQUE_TAKEN');
            $table->date('BIRTHDAYS');
            $table->date('ANNIVERSARY');
            $table->string('PERM_ADD');
            $table->integer('PERM_ZIP_ID');
            $table->integer('PERM_CITY_ID');
            $table->integer('PERM_STATE_ID');
            $table->integer('PERM_COUNTRY_ID');
            $table->string('PERM_POST_BOX_NO');
            $table->string('DRIV_LIC_NUM');
            $table->string('DRILIC_ISSUED_AT');
            $table->date('DRILIC_VALID_UPTO');
            $table->string('PP_NO');
            $table->string('VISA_STATUS');
            $table->date('VISA_VALID_UPTO');
            $table->string('CREDIT_CARD');
            $table->date('CC_VALID');
            $table->string('EMAIL2');
            $table->string('NICK_NAME_CUST');
            $table->string('SEX_CUST');
            $table->date('DOB_CUST');
            $table->string('IDENTITY_PICT_CUST');
            $table->string('TRADE_LIC_IMG');
            $table->string('PASSPORT_IMG');
            $table->string('NATIONALITY');
            $table->boolean('IS_BSP');
            $table->string('photo');
            $table->integer('SH_LENGTH');
            $table->integer('SH_SHOLDER');
            $table->integer('SH_CHEST');
            $table->integer('SH_STOMACH');
            $table->integer('SH_SEAT');
            $table->integer('SH_FRONT');
            $table->integer('SH_SLIEVE');
            $table->integer('SH_NECK');
            $table->integer('PT_LENGTH');
            $table->integer('PT_SEAT');
            $table->integer('PT_WEIST');
            $table->integer('PT_THIGH');
            $table->integer('PT_MORI');
            $table->integer('PT_POST');
            $table->integer('PT_LANGOT');
            $table->integer('SU_LENGTH');
            $table->integer('SU_SHOLDER');
            $table->integer('SU_CHEST');
            $table->integer('SU_STOMACH');
            $table->integer('SU_SEAT');
            $table->integer('SU_SLIEVE');
            $table->integer('SU_NECK');
            $table->integer('IW_LENGTH');
            $table->integer('IW_SHOLDER');
            $table->integer('IW_CHEST');
            $table->integer('IW_STOMACH');
            $table->integer('IW_SEAT');
            $table->integer('IW_SLIEVE');
            $table->integer('KU_NECK');
            $table->integer('PY_LENGTH');
            $table->integer('PY_WEIST');
            $table->integer('PY_MORI');
            $table->string('CGSTNO');
            $table->string('SGSTNO');
            $table->string('IGSTNO');
            $table->boolean('DEACTIVATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DAC_ACCOUNT_MASTERS');
    }
}
