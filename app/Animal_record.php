<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_record extends Model
{
    //
    protected $fillable=['animal','animalno','animalname','animaltype','animalage','herd','gender','purchasedate','birthdate','breed'];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function herd(){
        return $this->belongsTo(Herd::class);
    }
    public function breedregister(){
        return $this->hasMany(breedregister::class,'animal_record_id');
    }
}
