<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDerivedAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derived_allocations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('asset_class_allocation')->nullable();
            $table->integer('debtor_quality_allocation')->nullable();
            $table->integer('maturity_date_allocation')->nullable();
            $table->integer('currency_allocation')->nullable();
            $table->integer('country_allocation')->nullable();
            $table->integer('country_equity_allocation')->nullable();
            $table->integer('country_fi_allocation')->nullable();
            $table->integer('region_allocation')->nullable();
            $table->integer('regional_equity_allocation')->nullable();
            $table->integer('regional_fixed_income_allocation')->nullable();
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
        Schema::drop('derived_allocations');
    }
}
