<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;


    public function farms(){
        return $this->belongsToMany(Farm::class,'farm_user');
    }

    protected $fillable = ['name', 'mobile_no', 'email', 'employee_no','farm_name','farm_location','farm_address','password'];

    protected $hidden=['password','remember_token'];

    public function animal_records(){

        return $this->hasMany(Animal_record::class,'user_id');
    }
    public function breedregister (){
        return $this->hasMany(breedregister::class);
    }

    public function productions(){
        return $this->hasMany(Production::class);
    }
    public function herds(){
        return $this->hasMany(Herd::class);
    }
}
