<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('initial_id')->unsigned();
            $table->integer('charges_redemption_id')->unsigned();
            $table->integer('annual_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('initial_id')
                ->references('id')->on('initials')
                ->onDelete('cascade');

            $table->foreign('charges_redemption_id')
                ->references('id')->on('charges_redemptions')
                ->onDelete('cascade');

            $table->foreign('annual_id')
                ->references('id')->on('annuals')
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
        Schema::drop('charges');
    }
}
