<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {

    // DB::table('users')->insert([
    //   ['name' => 'karim', 'email' => 'karim@gmail.com'],
    //   ['name' => 'hassan', 'email' => 'hassan2@gmail.com'],
    //   ]);

        // $id = DB::table('users')->insertGetId([
        //     'name' => 'kaarim', 'email' => 'kaarim@gmail.com'
        // ]);

        // DB::table('users')->where('id', 1)->update(['name' => 'hassan']);


        DB::table('users')->updateOrInsert(
          ['email' => 'hassan2@gmail.com', 'name' => 'hassan2'],
          ['password' => 'password']
        );




       // dd($id);
        return view('welcome');
    }
}
