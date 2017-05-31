<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Address;
use App\User;

class Country extends Model
{
     public function posts()
     {
         return $this->hasManyThrough(Address::class,User::class);
     }
}

 

 