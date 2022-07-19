<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
   
    public function GetUsers()
    {
        $users = user::all();
        return view ('users',['users'=>$users]);
    }

    public function EditUser(Request $request,$id)
    {
        $user = user::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect('/users');
    }

    public function create(Request $request)
    {
        $user = new user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect('/users');
    }
    
    
    public function destroy($id)
    {
        $user = user::find($id);
        $user->destroy();
        return redirect('/users');
    }

}
