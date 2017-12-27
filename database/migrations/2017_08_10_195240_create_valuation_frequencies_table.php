<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuationFrequenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuation_frequencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('valuation_frequency')->nullable();
            $table->string('announcement_frequency')->nullable();
            $table->double('ytd_price_change')->nullable();
            $table->double('price_change_since_last_valuation')->nullable();
            $table->string('valuation_days')->nullable();
            $table->string('announcement_days')->nullable();
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
        Schema::drop('valuation_frequencies');
    }
}
