<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargesRedemptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges_redemptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('actual')->nullable();
            $table->integer('min')->nullable();
            $table->integer('max')->nullable();
            $table->integer('amount')->nullable();
            $table->string('payment_deadline')->nullable();
            $table->string('currency')->nullable();
            $table->integer('early_redemption_fees')->nullable();
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
        Schema::drop('charges_redemptions');
    }
}
