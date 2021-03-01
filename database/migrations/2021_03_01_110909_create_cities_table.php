<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('cities', function (Blueprint $table) {
            $table->id('id');
            $table->integer('code_postal');
            $table->unsignedBigInteger('id_gouv');
            $table->foreign ('id_gouv')->references('id')->on('gouvernements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
