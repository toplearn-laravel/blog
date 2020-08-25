<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class firstTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */





        // public function test_users_can_register(){
        //     $this->post(route('register'),
        //     [
        //         'name' => 'hassan2',
        //         'email' => 'hassan2@gmail.com',
        //         'password' => '123456789',
        //         'password_confirmation' => '123456789',
        //     ]);

        //     $this->assertDatabaseHas('users', [
        //         'name' => 'hassan2',
        //         'email' => 'hassan2@gmail.com',
        //     ]);

        // }


        public function test_users_can_login(){

            $user = factory(User::class)->create([
                'password' => Hash::make('123456789')
            ]);
            $this->post(route('login'),
            [
                'email' => $user->email,
                'password' => '123456789'
            ]);

            $this->assertTrue(auth()->check());
            $this->assertTrue($user->is(auth()->user()));


        }



}
