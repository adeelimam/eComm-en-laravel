<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "password not matched";

        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
