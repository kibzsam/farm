<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class Farm extends model
{
    //
    use Notifiable;
    public function users(){
        return $this->belongsToMany('App\User');
    }


    protected $fillable = ['farm_name', 'farm_location', 'farm_address'];
}
