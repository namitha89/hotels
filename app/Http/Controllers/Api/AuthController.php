<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);
        $accessToken = $user->CreateToken('authToken')->accessToken;

        return response(['user'=>$user,'access_token'=>$accessToken]);
    }

    public function login(Request $request){

        $loginData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        if(!auth()->attempt($loginData)){
            return response(['message'=>'Invalid Credentials']);
        }

        $accessToken = auth()->user()->CreateToken('authToken')->accessToken;

        return response(['user'=> auth()->user(),'access_token'=>$accessToken]);


    }
}
