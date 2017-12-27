<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundPeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('sharia_committee_id')->unsigned();
            $table->integer('board_member_id')->unsigned();
            $table->integer('fund_manager_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('sharia_committee_id')
                ->references('id')->on('sharia_committees')
                ->onDelete('cascade');

            $table->foreign('board_member_id')
                ->references('id')->on('board_members')
                ->onDelete('cascade');

            $table->foreign('fund_manager_id')
                ->references('id')->on('fund_managers')
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
        Schema::drop('fund_peoples');
    }
}
