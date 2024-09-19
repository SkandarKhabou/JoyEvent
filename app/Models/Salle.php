<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{

    protected $fillable = [
        'nom_Salle',
        'capacité',
        'etage',
        'hotelID',
    ];
    public function hotels()
    {
        return $this->belongsTo(Hotel::class, "hotelID");
    }
    public function events()
    {
        return $this->hasMany(Event::class, "salleID");
    }
}
