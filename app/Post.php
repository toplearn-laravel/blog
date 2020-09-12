<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title', 'user_id'
    ];

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    // protected $hidden = [
    //     'id'
    // ];
    // protected $visible = [
    //     'id'
    // ];
}
