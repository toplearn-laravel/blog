<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function test_post_exist()
    // {
    //     $this->assertDatabaseHas('posts', ['user_id' => 28]);
    // }

        // public function test_full_name_accessor_works(){

        //     $user = factory(User::class)->make(['first_name' => 'علی', 'last_name' => 'کریمی']);
        //     $this->assertEquals('علی کریمی', $user->fullName);

        // }

        public function test_relation(){

            $comment = factory('App\Comment')->create([
                'body' => 'nice',
                'post_id' => rand(1,100)
            ]);

                $this->assertInstanceOf('App\Post', $comment->post);

        }

}
