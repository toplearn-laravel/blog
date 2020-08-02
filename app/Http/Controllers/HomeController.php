<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // if (auth()->attempt([
        //     'email' => 'hassankhosrojerdi@yahoo.com',
        //     'password' => 123456789
        // ])){
        //     return 'yes';
        // }

        // auth()->loginUsingId(5);
        // $user = User::find(5);
        // auth()->login($user);
        // auth()->once([
        //     'email' => 'hassankhosrojerdi@yahoo.com',
        //     'password' => 123456789,
        // ]);
        // auth()->onceUsingId(577);
        // auth()->logoutOtherDevices(123456789);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // auth()->logout();



        return view('home');
    }

}
