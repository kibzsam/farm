<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    //
    protected $fillable = ['amount', 'average', 'animals_milked', 'milk_date'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
