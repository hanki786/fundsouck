<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundFlagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_flags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('closed_fund')->nullable();
            $table->string('closed_end_fund')->nullable();
            $table->string('exchange_listed')->nullable();
            $table->string('primary_share_class')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('umbrella')->nullable();
            $table->string('exchange_traded_fund')->nullable();
            $table->string('government_bond')->nullable();
            $table->string('corporate_bond')->nullable();
            $table->string('asset_backed_securities')->nullable();
            $table->string('futures_and_options')->nullable();
            $table->string('infrastructure_fund')->nullable();
            $table->string('hedge_fund_non_reporting')->nullable();
            $table->string('insurance_funds')->nullable();
            $table->string('short')->nullable();
            $table->string('linked_fund')->nullable();
            $table->string('pre_ipo')->nullable();
            $table->string('private_fund')->nullable();
            $table->string('provident_fund')->nullable();
            $table->string('reit')->nullable();
            $table->string('eltif')->nullable();
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
        Schema::drop('fund_flags');
    }
}
