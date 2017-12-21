<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcedStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sourced_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->double('sharpe_ratio')->nullable();
            $table->integer('ytd_current_year')->nullable();
            $table->integer('yield_since_inception')->nullable();
            $table->integer('yield_for_3_years')->nullable();
            $table->integer('yield_for_5_years')->nullable();
            $table->integer('yield_for_10_years')->nullable();
            $table->integer('ytd_standard_deviation')->nullable();
            $table->integer('standard_deviation_for_3_years')->nullable();
            $table->integer('standard_deviation_for_5_years')->nullable();
            $table->integer('standard_deviation_for_10_years')->nullable();
            $table->integer('borrowings')->nullable();
            $table->double('fund_leverage_ratio')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('last_update_date')->nullable();
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
        Schema::drop('sourced_statistics');
    }
}
