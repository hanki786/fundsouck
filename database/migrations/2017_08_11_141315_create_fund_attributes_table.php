<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('fund_key_attribute_id')->unsigned();
            $table->integer('fund_asset_attribute_id')->unsigned();
            $table->integer('fund_sales_distribution_id')->unsigned();
            $table->integer('fund_history_id')->unsigned();
            $table->integer('related_fund_id')->unsigned();
            $table->integer('fund_flag_id')->unsigned();
            $table->integer('investor_type_id')->unsigned();
            $table->integer('themes_attribute_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('fund_key_attribute_id')
                ->references('id')->on('fund_key_attributes')
                ->onDelete('cascade');
            $table->foreign('fund_asset_attribute_id')
                ->references('id')->on('fund_asset_attributes')
                ->onDelete('cascade');
            $table->foreign('fund_sales_distribution_id')
                ->references('id')->on('fund_sales_distributions')
                ->onDelete('cascade');
            $table->foreign('fund_history_id')
                ->references('id')->on('fund_histories')
                ->onDelete('cascade');
            $table->foreign('related_fund_id')
                ->references('id')->on('related_funds')
                ->onDelete('cascade');
            $table->foreign('fund_flag_id')
                ->references('id')->on('fund_flags')
                ->onDelete('cascade');
            $table->foreign('investor_type_id')
                ->references('id')->on('investor_types')
                ->onDelete('cascade');
            $table->foreign('themes_attribute_id')
                ->references('id')->on('themes_attributes')
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
        Schema::drop('fund_attributes');
    }
}
