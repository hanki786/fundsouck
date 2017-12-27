<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnualReportFeesBreakdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_report_fees_breakdowns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('fund_manager_fees')->nullable();
            $table->integer('investment_advisor_fees')->nullable();
            $table->integer('distribution_fees')->nullable();
            $table->integer('board_members_fees')->nullable();
            $table->integer('shariah_comitee_fees')->nullable();
            $table->integer('custodian_fees')->nullable();
            $table->integer('transfer_agent_fees')->nullable();
            $table->integer('auditor_fees')->nullable();
            $table->integer('administrator_fees')->nullable();
            $table->integer('publication_fees')->nullable();
            $table->integer('regulator_fees')->nullable();
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
        Schema::drop('annual_report_fees_breakdowns');
    }
}
