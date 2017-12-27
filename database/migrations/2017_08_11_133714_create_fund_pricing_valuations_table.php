<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundPricingValuationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_pricing_valuations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('fund_time_series_id')->unsigned();
            $table->integer('valuation_frequency_id')->unsigned();
            $table->integer('market_data_id')->unsigned();
            $table->integer('fund_income_setting_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('fund_time_series_id')
                ->references('id')->on('fund_time_series')
                ->onDelete('cascade');

            $table->foreign('valuation_frequency_id')
                ->references('id')->on('valuation_frequencies')
                ->onDelete('cascade');

            $table->foreign('market_data_id')
                ->references('id')->on('market_datas')
                ->onDelete('cascade');

            $table->foreign('fund_income_setting_id')
                ->references('id')->on('fund_income_settings')
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
        Schema::drop('fund_pricing_valuations');
    }
}
