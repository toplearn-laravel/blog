<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    // public function getLastNameAttribute($value){
    //     return $value ?: 'No Last Name';
    // }

    //   public function getFullNameAttribute(){
    //     return $this->first_name . ' ' . $this->last_name;
    // }

    // public function setFirstNameAttribute($value){

    //     $this->attributes['first_name'] = strtolower($value);

    // }

}
