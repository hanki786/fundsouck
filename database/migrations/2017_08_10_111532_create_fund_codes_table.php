<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('isin_code')->nullable();
            $table->string('isin_currency_class_code')->nullable();
            $table->string('tadawul_fund_code')->nullable();
            $table->integer('maroclear_code')->nullable();
            $table->string('stock_exchange_ticker')->nullable();
            $table->string('etf_ticker')->nullable();
            $table->string('turkish_fund_code')->nullable();
            $table->string('cusip')->nullable();
            $table->string('polish_rfi_code')->nullable();
            $table->string('johannesburg_se_code')->nullable();
            $table->string('sedol_code')->nullable();
            $table->string('valoren_code')->nullable();
            $table->string('wkngerman_code')->nullable();
            $table->string('indonesian_sec_code')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fund_codes');
    }
}
