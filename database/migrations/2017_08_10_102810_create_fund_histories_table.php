<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('liquidation_date')->nullable();
            $table->string('successor')->nullable();
            $table->string('successor_code')->nullable();
            $table->date('succession_date')->nullable();
            $table->date('extended_history_date')->nullable();
            $table->date('available_history_date')->nullable();
            $table->string('primary_share_class_name')->nullable();
            $table->string('primary_share_class_code')->nullable();
            $table->string('portfolio_name')->nullable();
            $table->string('portfolio_code')->nullable();
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
        Schema::drop('fund_histories');
    }
}
