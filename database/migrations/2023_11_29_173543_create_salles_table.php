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
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Salle');
            $table->integer('capacité');
            $table->integer('etage');
            $table->unsignedBigInteger('hotelID');
            $table->foreign('hotelID')
            ->references('id')
            ->on('hotels');
            $table->timestamps();
        });
    }

// ...


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salles');
    }
};
