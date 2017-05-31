<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Address;
use App\User;

class Country extends Model
{
    protected $fillable = [
        'name', 'iso2', 'iso3','numeric','currency'
    ];

    
}

 

 