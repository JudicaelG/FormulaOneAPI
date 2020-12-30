<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Calendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('calendars', function (Blueprint $table){
              $table->id()->autoIncrement();
              $table->year('year');
              $table->date('startDate');
              $table->date('endDate');
              $table->unsignedBigInteger('circuit_id');
              $table->foreign('circuit_id')
                    ->references('id')
                    ->on('circuits')
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
        Schema::dropIfExists('calendars');
    }
}
