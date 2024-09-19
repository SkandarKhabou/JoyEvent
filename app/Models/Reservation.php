<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{


    protected $fillable = [
        'nbPlaces',
        'PrixTotal',
        'eventID',
        'clientID',
        
    ];
    public function events()
    {
        return $this->belongsTo(Event::class, "eventID");
    }
    public function clients()
    {
        return $this->belongsTo(Client::class, "clientID");
    }
}
