<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('legal_name')->nullable();
            $table->string('common_name')->nullable();
            $table->string('fund_souk_code')->nullable();
            $table->string('commercial_registration_number')->nullable();
            $table->string('role')->nullable();
            $table->string('chairman')->nullable();
            $table->string('ceo')->nullable();
            $table->string('register_number')->nullable();
            $table->string('regulator_authorization_number')->nullable();
            $table->date('authorization_date')->nullable();
            $table->double('share_capital')->nullable();
            $table->string('share_capital_currency')->nullable();
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
        Schema::drop('profiles');
    }
}
