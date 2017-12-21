<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundKeyAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_key_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('fund_currency')->nullable();
            $table->date('inception_date')->nullable();
            $table->string('inception_price_type')->nullable();
            $table->integer('inception_price')->nullable();
            $table->date('re_launch_date')->nullable();
            $table->integer('re_launch_price')->nullable();
            $table->date('maturity_date')->nullable();
            $table->date('fy_start_date')->nullable();
            $table->date('fy_end_date')->nullable();
            $table->integer('guarantee')->nullable();
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
        Schema::drop('fund_key_attributes');
    }
}
