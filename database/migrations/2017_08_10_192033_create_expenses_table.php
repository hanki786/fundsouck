<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('annual_report_fees_breakdown_id')->unsigned();
            $table->double('dealing_cost_ratio')->nullable();
            $table->double('total_expense_ratio')->nullable();
            $table->double('performance_fees')->nullable();
            $table->string('high_water_mark')->nullable();
            $table->double('fees_calculation_base')->nullable();
            $table->integer('last_update_date')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('annual_report_fees_breakdown_id')
                ->references('id')->on('annual_report_fees_breakdowns')
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
        Schema::drop('expenses');
    }
}
