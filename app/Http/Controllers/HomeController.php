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
        // DB::table('users')->where('id', 1)->increment('age');
        // DB::table('users')->where('id', 1)->decrement('age', 5);
        // DB::table('users')->where('id', 1)->delete();


        // DB::transaction(function () {
            // DB::table('users')->where('id', 2)->update(['name' => 'hossein']);
            // DB::table('usesssrs')->where('id', 3)->update(['name' => 'karim']);
        // });

        // try{
        //     DB::beginTransaction();
        //     DB::table('users')->where('id', 2)->update(['name' => 'hossein']);
        //     DB::table('users')->where('id', 3)->update(['name' => 'karim']);
        //     DB::commit();
        // }
        // catch(\Exception $e){
        //     echo $e;
        //     DB::rollBack();
        // }






        return view('welcome');
    }
}
