<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pilote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilotes', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('number');
            $table->string('photo')->nullable($value = true);
            $table->string('nationality')->nullable($value = true);
            $table->date('birthday')->nullable($value = true);
            $table->string('team')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pilotes');
    }
}
