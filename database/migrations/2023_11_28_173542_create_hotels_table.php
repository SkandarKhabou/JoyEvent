<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // ...

    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('nomHotel');
            $table->string('adress');
            $table->integer('nbEtoile');
            $table->string('MatriculeFiscale');
            $table->string('Email')->unique();
            $table->string('Password');   
            $table->unsignedBigInteger('villeID');
            $table->foreign('villeID')
            ->references('id')
            ->on('villes');         
            $table->timestamps();
        });
    }

// ...


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
