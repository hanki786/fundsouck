<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_facts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('index_name')->nullable();
            $table->string('index_code')->nullable();
            $table->string('index_objective')->nullable();
            $table->string('index_investability')->nullable();
            $table->string('index_weighting')->nullable();
            $table->integer('component_number')->nullable();
            $table->string('review_frequency')->nullable();
            $table->string('calculation')->nullable();
            $table->string('base_value')->nullable();
            $table->date('base_date')->nullable();
            $table->date('introduction_date')->nullable();
            $table->string('settlement_procedure')->nullable();
            $table->string('index_provider')->nullable();
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
        Schema::drop('index_facts');
    }
}
