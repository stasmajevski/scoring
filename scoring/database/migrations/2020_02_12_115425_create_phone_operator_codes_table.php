<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneOperatorCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_operator_codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('phone_operator_id')->index();
            $table->unsignedDecimal('code', 3, 0)->unique();

            $table->timestamps();

            $table->foreign('phone_operator_id')->references('id')->on('phone_operators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_operator_codes');
    }
}
