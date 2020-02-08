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
            'name' => Str::random(5),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        }
    }
}
