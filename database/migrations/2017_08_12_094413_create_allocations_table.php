<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('asset_class_allocation_id')->unsigned()->nullable();
            $table->integer('debtor_quality_allocation_id')->unsigned()->nullable();
            $table->integer('maturity_date_allocation_id')->unsigned()->nullable();
            $table->integer('currency_allocation_id')->unsigned()->nullable();
            $table->integer('country_allocation_id')->unsigned()->nullable();
            $table->integer('region_allocation_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('asset_class_allocation_id')
                ->references('id')->on('asset_class_allocations')
                ->onDelete('cascade');
            $table->foreign('debtor_quality_allocation_id')
                ->references('id')->on('debtor_quality_allocations')
                ->onDelete('cascade');
            $table->foreign('maturity_date_allocation_id')
                ->references('id')->on('maturity_date_allocations')
                ->onDelete('cascade');
            $table->foreign('currency_allocation_id')
                ->references('id')->on('currency_allocations')
                ->onDelete('cascade');
            $table->foreign('country_allocation_id')
                ->references('id')->on('country_allocations')
                ->onDelete('cascade');
            $table->foreign('region_allocation_id')
                ->references('id')->on('region_allocations')
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
        Schema::drop('allocations');
    }
}
