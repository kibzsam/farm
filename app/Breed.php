<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{

    public function animal(){

    return $this->belongsTo(Animal::class);
    }


}
