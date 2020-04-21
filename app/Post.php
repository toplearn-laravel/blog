<?php

namespace App;

use App\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];


    // protected static function boot(){

    //     parent::boot();
    //     static::addGlobalScope(new StatusScope);

    // }

        // protected static function boot(){

        //     parent::boot();
        //     static::addGlobalScope('status', function(Builder $builder){
        //         $builder->where('status', 1);
        //     });

        // }


}
