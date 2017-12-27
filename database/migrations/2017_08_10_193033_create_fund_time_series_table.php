<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundTimeSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_time_series', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->double('fund_net_assets')->nullable();
            $table->double('asset_under_management')->nullable();
            $table->double('initial_fund_size')->nullable();
            $table->double('fund_manager_investment')->nullable();
            $table->double('fund_manager_investment%')->nullable();
            $table->double('gross_sales')->nullable();
            $table->double('gross_sales_ratio')->nullable();
            $table->double('average_net_assets')->nullable();
            $table->double('redemption_ratio')->nullable();
            $table->integer('redemptions')->nullable();
            $table->integer('no_of_units')->nullable();
            $table->integer('no_of_unit_holders')->nullable();
            $table->double('unit_price')->nullable();
            $table->integer('last_update_date')->nullable();
            $table->integer('last_valuation_date')->nullable();
            $table->string('valuation_basis')->nullable();
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
        Schema::drop('fund_time_series');
    }
}
