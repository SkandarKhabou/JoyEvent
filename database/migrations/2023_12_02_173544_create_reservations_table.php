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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); 
            $table->integer('nbPlaces');
            $table->decimal('PrixTotal');
            $table->unsignedBigInteger('eventID');
            $table->foreign('eventID')
            ->references('id')
            ->on('events');
            $table->unsignedBigInteger('clientID');
            $table->foreign('clientID')
            ->references('id')
            ->on('clients');
            $table->string('etat')->default('en Attente');
            $table->timestamps();
        });
    }

// ...


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
