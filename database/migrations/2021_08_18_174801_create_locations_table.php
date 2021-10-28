<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->dateTime('duree');
            $table->string('prix');
            $table->string('detailles');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')
            ->references('id')
            ->on('clients')
            ->onDelete('restrict')
            ->onUpdate('restrict');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
