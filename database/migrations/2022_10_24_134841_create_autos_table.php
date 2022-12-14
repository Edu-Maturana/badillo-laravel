<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
           $table->string('patente',6)->primary();
           $table->string('modelo',50);
           $table->unsignedInteger('precio');
           $table->unsignedBigInteger('marca_id');
           //generamos el vínculo entre las tablas 1->m
           $table->foreign('marca_id')->references('id')->on('marcas');
           
            // $table->id();
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
};
