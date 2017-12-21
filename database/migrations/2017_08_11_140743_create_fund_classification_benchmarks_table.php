<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundClassificationBenchmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_classification_benchmarks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('fund_classification_id')->unsigned();
            $table->integer('fund_benchmark_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('fund_classification_id')
                ->references('id')->on('fund_classification_schemes')
                ->onDelete('cascade');

            $table->foreign('fund_benchmark_id')
                ->references('id')->on('fund_benchmarks')
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
        Schema::drop('fund_classification_benchmarks');
    }
}
