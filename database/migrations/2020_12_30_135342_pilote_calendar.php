<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PiloteCalendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_pilote', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('calendar_id');
            $table->foreign('calendar_id')
                ->references('id')
                ->on('calendars')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('pilote_id');
            $table->foreign('pilote_id')
                ->references('id')
                ->on('pilotes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_pilote');
    }
}
