<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundPerformanceRiskStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_performance_risk_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('sourced_statistics_id')->unsigned();
            $table->integer('calculated_statistics_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('sourced_statistics_id')
                ->references('id')->on('sourced_statistics')
                ->onDelete('cascade');

            $table->foreign('calculated_statistics_id')
                ->references('id')->on('calculated_statistics')
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
        Schema::drop('fund_performance_risk_stats');
    }
}
