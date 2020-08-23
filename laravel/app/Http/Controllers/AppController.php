<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class Controller extends Controller
{
    public function init()
    {
        $user = Auth::user();
        return response()->json('user' -> $user, 200);
    } 
    public function login(Requset $request)
    {
        if(Auth::attampt(['email' => $request->username, 'password'=>$request->password], true)){
          return response()->json(Auth::user(), 200);  
        }
    else{
        return response()->json(['error' => 'invalid_credentials'], 401);
    }

    }
    public function register(Requset $request)
    {
        $user = User::where('username', $request->username)->first();
        if (isset($user->id))
        {
            return response()->json(['error'=>'Username already exists'], 401);
        }

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $bio->bio = $request->bio;
        $no_telp = $no_telp->no_telp;
        $negara->negara = $request->negara;

        $user->save();
        Auth::login($user);

        return response()->json($user,200);

    }
    public function logout()
    {
        Auth::logout();

    }
    
}