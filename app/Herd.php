<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Herd extends Model
{
    //
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function animals(){
        return $this->hasMany(Animal_record::class);
    }
}
