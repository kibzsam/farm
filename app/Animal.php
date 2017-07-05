<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //
public function breeds(){
    return $this->hasMany(Breed::class);
}

}
