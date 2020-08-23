<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class firstTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */



     public function test_it_creates_a_new_post(){

    //     $user = factory(User::class)->create();
    //     $this->be($user);
    //     $this->post(route('post.store'),
    //     [
    //         'title' => 'test100000',
    //         'user_id' => 200,
    //     ]);

    //     $this->assertDatabaseHas('posts',[
    //         'title' => 'test100000',
    //         'user_id' => 200,
    //     ]);
    //  }

        $user = factory(User::class)->create();
        $this->actingAs($user)->post(route('post.store'),
        [
            'title' => 'test100000',
            'user_id' => $user->id,
        ]);

        $this->assertDatabaseHas('posts',[
            'title' => 'test100000',
            'user_id' => $user->id,
        ]);
     }


}
