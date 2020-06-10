<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

  public function image(){

    return $this->morphOne('App\Image', 'imageable');

  }

    public function address(){
        return $this->hasOne('App\Address');
    }

    public function info(){
        return $this->hasOneThrough('App\Information', 'App\Car');
    }

}
