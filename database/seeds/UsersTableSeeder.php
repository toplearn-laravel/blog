<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<10;$i++) {
            DB::table('users')->insert([
            'body' => Str::random(5),
            'image' => Str::random(10),
            // 'email' => Str::random(10).'@gmail.com',
        ]);
        }
    }
}
