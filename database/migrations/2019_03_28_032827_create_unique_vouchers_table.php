<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniqueVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unique_vouchers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->Integer('productID')->nullable(false);
          $table->string('voucherNumber')->nullable(false);
          $table->Integer('patientId')->nullable(false);
          $table->string('voucherStartDate')->nullable(true);
          $table->Integer('employeeId')->nullable(true);
          $table->string('RedeemDate')->nullable(true);
          $table->boolean('Active');
          $table->string('voucherName');
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
        Schema::dropIfExists('unique_vouchers');
    }
}
