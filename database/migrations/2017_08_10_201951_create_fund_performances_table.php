<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_performances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('annual_compound_return')->nullable();
            $table->integer('annualised_distribution_yield')->nullable();
            $table->integer('indexed_performance')->nullable();
            $table->integer('percentage_growth')->nullable();
            $table->double('average_gain')->nullable();
            $table->double('average_loss')->nullable();
            $table->double('average_return')->nullable();
            $table->integer('relative_average_return')->nullable();
            $table->integer('relative_performance')->nullable();
            $table->integer('performance')->nullable();
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
        Schema::drop('fund_performances');
    }
}
