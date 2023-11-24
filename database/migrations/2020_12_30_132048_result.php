<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Result extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->integer('place');
            $table->integer('score');
            $table->unsignedBigInteger('subEvent_id');
            $table->foreign('subEvent_id')
                ->references('id')
                ->on('subevents')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('pilote_id');
            $table->foreign('pilote_id')
                ->references('id')
                ->on('pilotes')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
