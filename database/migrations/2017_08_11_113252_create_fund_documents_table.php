<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('key_investor_information_document_id')->unsigned();
            $table->integer('semi_annual_report_id')->unsigned();
            $table->integer('annual_report_id')->unsigned();
            $table->integer('terms_conditions_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('key_investor_information_document_id')
                ->references('id')->on('key_investor_information_documents')
                ->onDelete('cascade');

            $table->foreign('semi_annual_report_id')
                ->references('id')->on('semi_annual_reports')
                ->onDelete('cascade');

            $table->foreign('annual_report_id')
                ->references('id')->on('annual_reports')
                ->onDelete('cascade');

            $table->foreign('terms_conditions_id')
                ->references('id')->on('terms_conditions')
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
        Schema::drop('fund_documents');
    }
}
