<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundRiskRatiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_risk_ratios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('bear_beta')->nullable();
            $table->integer('beta')->nullable();
            $table->integer('bull_beta')->nullable();
            $table->double('bull_bear_beta_ratio')->nullable();
            $table->double('calmar_ratio')->nullable();
            $table->integer('correlation')->nullable();
            $table->integer('covariance')->nullable();
            $table->integer('downside_deviation')->nullable();
            $table->double('information_ratio')->nullable();
            $table->double('israelsen_ratio')->nullable();
            $table->integer('alpha')->nullable();
            $table->integer('kurtosis')->nullable();
            $table->integer('synthetic_risk_reward_indicator')->nullable();
            $table->integer('maximum_drawdown')->nullable();
            $table->integer('maximum_drawdown_period')->nullable();
            $table->double('maximum_gain')->nullable();
            $table->double('maximum_loss')->nullable();
            $table->integer('negative_periods')->nullable();
            $table->integer('omega')->nullable();
            $table->integer('positive_periods')->nullable();
            $table->integer('recovery_period')->nullable();
            $table->integer('return_risk')->nullable();
            $table->integer('r_squared')->nullable();
            $table->integer('semi_deviation')->nullable();
            $table->integer('semi_variance')->nullable();
            $table->double('sharpe_ratio')->nullable();
            $table->integer('skewness')->nullable();
            $table->double('sortino_ratio')->nullable();
            $table->integer('standard_deviation')->nullable();
            $table->integer('standard_error')->nullable();
            $table->double('sterling_ratio')->nullable();
            $table->double('terynor_ratio')->nullable();
            $table->integer('tracking_error')->nullable();
            $table->integer('upside_deviaton')->nullable();
            $table->integer('variance')->nullable();
            $table->integer('active_share')->nullable();
            $table->double('knaar_perflow_ratio')->nullable();
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
        Schema::drop('fund_risk_ratios');
    }
}
