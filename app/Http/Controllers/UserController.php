<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $request->user();
    }
    public function register(Request $request)
    {


        $result = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),            
            'name' => $request->name,
                        
        ]);

        return $result;
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $token = md5(time()).'.'.md5($request->email);
            $user->forceFill([
                'api_token'=>$token,
            ])->save();
            return response()->json([
                'token' =>$token
            ]);
        }

        return response()->json([
            'message' => 'Las datos no son correctos'
        ],401);
    }

    public function logout(Request $request)
    {
        $request->user()->forceFill([
            'api_token'=> null,
        ])->save();

        return response()->json([
            'message'=> 'suceess'
        ]);
    }
}
