<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    // public function User(){
    //     return $this->belongsTo(User::class);
    // }
      public function country()
     {
         return $this->hasManyThrough(Address::class,User::class);
     }
}
