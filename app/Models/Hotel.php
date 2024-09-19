<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    

    protected $fillable = [
        'photo',
        'nomHotel',
        'adress',
        'nbEtoile',
        'MatriculeFiscale',
        'Email',
        'Password',
        'villeID',
    ];
    public function villes()
    {
        return $this->belongsTo(Ville::class, "villeID");
    }
    public function salles()
    {
        return $this->hasMany(Salle::class, "hotelID");
    }
}
