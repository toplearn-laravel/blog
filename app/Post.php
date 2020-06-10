<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  public function image(){

    return $this->morphOne('App\Image', 'imageable');

  }

    public function tags(){
        // return $this->belongsToMany('App\Tag')->withPivot('value');
        // return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
