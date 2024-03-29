<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function userData(){
        $userData=["ali","hamza","daniyal","majid"];
        return view('users',compact('userData'));

    }

    public function subData(Request $request){
        $userName=$request->userName;
        $userEmail=$request->userEmail;
        $userPass=$request->userPasword;
        $userData=[$userName,$userEmail,$userPass];
        return view ('select',compact('userData'));

    }
}


