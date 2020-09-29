<?php

namespace App\Http\Controllers\api\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if(!Auth::attempt($login)){
            response([
                'message' => 'invalid login info'
            ]);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return response([
            'user' => Auth::user(),
            'accessToken' => $accessToken
        ]);
    }


}
