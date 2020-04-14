<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    public function scopeActive($query, $status){

      return $query->where('status', $status);

    }


}
