<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
      $user = factory(User::class, 20)->create();
        return view('welcome');
    }
}
