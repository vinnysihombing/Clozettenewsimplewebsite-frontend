<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;
use JWTAuth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'listUser']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'user' => $user]);
    }
    public function listUser() {
        $users = User::orderBy('id')->paginate(40);
        return response()->json([
            'user' => $user
        ]);
    }
    public function showUser($id) {
        $user = User::find($id);
        return response()->json([
            'user' => $user
        ]);
    }

    public function profile() {
      return view ('home', array('user' => JWTAuth::parseToken()->authenticate()));
    }

    public function update_avatar(Request $request) {
        if ($request->hasFile('avatar')) {
          $avatar = $request -> file ('avatar');
          $filename = time().'.'.$avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/'.$filename));

          $user=JWTAuth::parseToken()->authenticate();
          $user->avatar = $filename;
          $user ->save();
        }
        return view('home', array('user'=>JWTAuth::parseToken()->authenticate()));
    }

}
