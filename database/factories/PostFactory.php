<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'user_id' => function(){
         return factory(User::class)->create()->id;
      },
        'title' => $faker->text,
        'started_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
