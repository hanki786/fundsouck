<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundServiceProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_service_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('legal_advisor_id')->unsigned();
            $table->integer('distributor_id')->unsigned();
            $table->integer('promoter_id')->unsigned();
            $table->integer('auditor_id')->unsigned();
            $table->integer('administrator_id')->unsigned();
            $table->integer('custodian_id')->unsigned();
            $table->integer('sub_investment_advisor_id')->unsigned();
            $table->integer('investment_advisor_id')->unsigned();
            $table->integer('fund_management_company_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('legal_advisor_id')
                ->references('id')->on('legal_advisors')
                ->onDelete('cascade');

            $table->foreign('distributor_id')
                ->references('id')->on('distributors')
                ->onDelete('cascade');

            $table->foreign('promoter_id')
                ->references('id')->on('promoters')
                ->onDelete('cascade');

            $table->foreign('auditor_id')
                ->references('id')->on('auditors')
                ->onDelete('cascade');

            $table->foreign('administrator_id')
                ->references('id')->on('administrators')
                ->onDelete('cascade');

            $table->foreign('custodian_id')
                ->references('id')->on('custodians')
                ->onDelete('cascade');

            $table->foreign('sub_investment_advisor_id')
                ->references('id')->on('sub_investment_advisors')
                ->onDelete('cascade');

            $table->foreign('investment_advisor_id')
                ->references('id')->on('investment_advisors')
                ->onDelete('cascade');

            $table->foreign('fund_management_company_id')
                ->references('id')->on('fund_management_companies')
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
        Schema::drop('fund_service_providers');
    }
}
