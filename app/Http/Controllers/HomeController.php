<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      $users = ['hassan' , 'karim' , 'ali'];
      return view('welcome' , compact('users'));
    }
}
