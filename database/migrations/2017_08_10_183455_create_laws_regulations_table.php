<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawsRegulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laws_regulations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('cuits_directive')->nullable();
            $table->string('aifmd_directive')->nullable();
            $table->string('aifmd_status')->nullable();
            $table->string('fatca_compliant')->nullable();
            $table->string('giin_number')->nullable();
            $table->string('lei_code')->nullable();
            $table->date('last_update_date')->nullable();
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
        Schema::drop('laws_regulations');
    }
}
