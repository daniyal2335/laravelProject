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
}
