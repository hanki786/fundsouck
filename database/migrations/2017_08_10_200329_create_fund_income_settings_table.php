<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundIncomeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_income_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('ex_dividend_date')->nullable();
            $table->integer('dividend_amount')->nullable();
            $table->integer('payment_date')->nullable();
            $table->string('dividend_frequency')->nullable();
            $table->string('dividend_currency')->nullable();
            $table->string('default_tax_basis')->nullable();
            $table->string('corporate_action_type')->nullable();
            $table->string('income_distribution')->nullable();
            $table->string('income_operation')->nullable();
            $table->string('reinvest_date')->nullable();
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
        Schema::drop('fund_income_settings');
    }
}
