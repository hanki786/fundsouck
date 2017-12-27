<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('open')->nullable();
            $table->integer('high')->nullable();
            $table->integer('low')->nullable();
            $table->integer('close')->nullable();
            $table->integer('change')->nullable();
            $table->integer('change%')->nullable();
            $table->integer('volume_traded')->nullable();
            $table->integer('value_traded')->nullable();
            $table->integer('price_date')->nullable();
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
        Schema::drop('market_datas');
    }
}
