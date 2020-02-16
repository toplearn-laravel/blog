<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;


class HomeController extends Controller
{
    public function index()
    {
      // $users = DB::select('select * from users where id = ?', [$id]);
      // $users = DB::select('select * from users where id = :id', ['id' => 2]);
      // $users = DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['hassan', 'hassan@yahoo.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
      // $users = DB::update('update users set name = ? where id = ?', ['ali', 65]);
      // $users = DB::delete('delete from users where id = ?', [65]);
        return view('welcome');
    }
}
