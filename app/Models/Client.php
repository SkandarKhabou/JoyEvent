<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'Cin',
        'nomClient',
        'adressClient',
        'DateNais',
        'Email',
        'Password'
    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class, "clientID");
    }
}
