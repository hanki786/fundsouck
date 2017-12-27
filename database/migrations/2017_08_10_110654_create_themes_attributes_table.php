<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('fofs_external')->nullable();
            $table->string('fofs_internal')->nullable();
            $table->string('f_of_etfs')->nullable();
            $table->string('f_of_reits')->nullable();
            $table->string('f_of_hfs')->nullable();
            $table->string('f_of_pefs')->nullable();
            $table->string('hedged')->nullable();
            $table->string('index_tracking')->nullable();
            $table->string('index_replication_method')->nullable();
            $table->string('shariah_compliant')->nullable();
            $table->string('leveraged')->nullable();
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
        Schema::drop('themes_attributes');
    }
}
