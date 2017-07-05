<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class breedregister extends Model
{
    //
    protected $fillable=['animalno','breedate','bullassigned','method','status','comment','calvdate'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function status(){
        return $this->belongsToMany(Status::class,'status_breedregister');
    }
    public function animalrecord(){
        return $this->belongsTo(Animal_record::class,'animal_record_id');
    }
}
