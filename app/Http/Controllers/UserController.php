<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    public function show($id){
        $user=User::find($id);
        $userId=Auth::id();
        return view('users.show',['user'=>$user],compact('userId'));
    }

    public function edit($id){
        $user=User::find($id);
        return view('users.edit',['user'=>$user]);
    }

    public function update(Request $request){
        $userId=Auth::id();
        User::find($userId)->update([
            'name' => $request->name,
            'age' => $request->age,
            'introduction' => $request->introduction
        ]);
        /*
        $user = Auth::user();
        $user->name = $request->name;
        $user->age = $request->age;
        $user->introduction=$request->introduction;
        $user->save();
        */


        return redirect()->back()->with(['message' => '更新しました！']);
    }
}
