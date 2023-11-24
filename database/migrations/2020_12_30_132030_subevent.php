<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subevent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subevents', function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->date('startDate');
            $table->date('endDate');
            $table->enum('subEventType', ['Free Practice 1', 'Free Practice 2', 'Free Practice 3', 'Qualification', 'Race']);
            $table->unsignedBigInteger('calendar_id');
            $table->foreign('calendar_id')
                ->references('id')
                ->on('calendars')
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
        Schema::dropIfExists('subevents');
    }
}
