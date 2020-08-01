<?php

namespace App\Http\Controllers;

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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // dd(Hash::make('test'));

        // dd(
        // Hash::check('test', '$2y$10$7rJ6XNP0tlLZQwujmIKreuipTvuUwLxOrRP.NnDcbcFFbm3BGFwti'
        // ));


        // dd(encrypt('test'));
        // dd(decrypt('eyJpdiI6InhoRDFNQmRDMkI3cTIzUGNiQ2JvRWc9PSIsInZhbHVlIjoiWkVKNm96SG9WOGtuT0Fub0NjejNZUT09IiwibWFjIjoiNzkwZDdhM2FjMDZmNjhhYjRiYTc0YTY3YjAyYmViMWViZDk4M2VkN2FlODg5YmU4NzNiNTljN2Q4MzU3YzAzNSJ9'));

        // dd(Crypt::encryptString('test'));
        // dd(Crypt::decryptString('eyJpdiI6IkNNdTBoYTdxY1wvYlwvRVwvRVJINnRzSHc9PSIsInZhbHVlIjoickpQSXBBTUpXZlwvWEJPRVA4dzJ2SlE9PSIsIm1hYyI6IjA1NmZlOTFiZDY5MWQ1ZTQwODZlOGU1MWQzOGE3Y2NkYzYxYWNmZWMwOGQ1NzBiMGQ4MzUzMzkxM2UzYjM3NTQifQ=='));


        return view('home');
    }

}
