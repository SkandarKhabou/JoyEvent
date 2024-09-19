<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{


    protected $fillable = [
        'photo',
        'Titre',
        'CapacitéEvent',
        'CapacitéRestante',
        'DateDebut',
        'DateFin',
        'Durée',
        'PrixTicket',
        'salleID',
    ];
    public function salles()
    {
        return $this->belongsTo(Salle::class, "salleID");
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, "eventID");
    }
}
