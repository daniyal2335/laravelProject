<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class MyController extends Controller
{
    

    public function insertData(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'pass'=>'required'
        ]);

        $insData = new Teacher();
        $insData->name = $req->name;
        $insData->email = $req->email;
        $insData->pass = $req->pass;
        $insData->save();
        
        return redirect('select2');
    }

    public function selectData(){
        $allUsersData = Teacher::all();
        return view ('selectUsers', compact('allUsersData'));
    }

    public function showData($uId){
        $selectData = Teacher::find($uId);
        return view('edit', compact('selectData'));
    }

    public function updateData(Request $req, $id){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'pass'=>'required'
        ]);

        $userData = Teacher::find($id);
        $userData->name = $req->name;
        $userData->email = $req->email;
        $userData->pass = $req->pass;
        $userData->save();
        
        return redirect('select2');
    }
    public function removeData($dId){
      Teacher::delete($dId);
      return view('', compact('selectData'));
      
    }
}
