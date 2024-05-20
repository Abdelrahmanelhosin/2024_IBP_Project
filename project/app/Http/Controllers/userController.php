<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class userController extends Controller
{
     public function create(Request $request) {

        // $user = User::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'user_type'=>0,
        //     'password'=>$request->password,
        // ]); 

        // return redirect()->route('/');
        
      //   return dd($request);
     }
}
