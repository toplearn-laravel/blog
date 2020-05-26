<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{


    public function index()
    {

        $address = Address::find(1);
        // $user = User::find(82);
        // dd($user->address);
        dd($address->user);

        return view('welcome');


        }
}
