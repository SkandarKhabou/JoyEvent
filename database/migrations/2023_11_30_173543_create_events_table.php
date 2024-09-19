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
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('photo');
        $table->string('Titre');
        $table->integer('CapacitéEvent');
        $table->integer('CapacitéRestante');
        $table->dateTime('DateDebut');
        $table->dateTime('DateFin');
        $table->string('Durée')->nullable();
        $table->decimal('PrixTicket');
        $table->unsignedBigInteger('salleID');
            $table->foreign('salleID')
            ->references('id')
            ->on('salles');
        $table->timestamps();

         });
}

// ...


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
