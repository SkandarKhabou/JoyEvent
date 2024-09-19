<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
   

    protected $fillable = [
        'nomVille',
    ];
    public function hotels()
    {
        return $this->hasMany(Hotel::class ,"villeID");
    }
}
