<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundObjectiveStrategiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_objective_strategies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('short_objective')->nullable();
            $table->string('detailed_objective')->nullable();
            $table->string('investment_strategy')->nullable();
            $table->string('recommended_investment_horizon')->nullable();
            $table->string('risk_profile')->nullable();
            $table->string('types_of_risk')->nullable();
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
        Schema::drop('fund_objective_strategies');
    }
}
