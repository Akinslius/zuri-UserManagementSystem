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
        return view ('/edituser',['user'=>$user]);
        // $user = user::find($id);
        // $input = $request->all();
        // $users->update($input);
        // return redirect('/user')->with('flash_message', 'user Updated!'); 
       
    }
    public function update(Request $request,$id)

    {
        $user = user::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('/users')->with('flash_message', 'user Updated!'); 
       
    }

    public function CreateUser()
    {
        return view ('/createuser');
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
    public function show($id)
    {
        $user = user::find($id);
        return view('/edituser', $user);
    }
   
    
    public function DeleteUser($id)
    {
        $user = user::find($id);
        $user->destroy($id);
        return redirect('/users')->with('flash_message', 'user Deleted!');
    }

}
