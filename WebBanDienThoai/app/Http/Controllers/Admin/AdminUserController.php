<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;


class AdminUserController extends Controller
{
    // List user admin
    public function listUser(){
        $users = User::all();
        return view ('admin.list.list_user',compact('users'));
    }
    // delete user admin
    public function deleteUser(Request $request)
    {
    $user_id = $request->get('id');
    $user = User::destroy($user_id);
    return redirect("listuser")->withSucceess("You have signed-in");
    }

    // From Update user admin
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        return view('admin.list.update_user',['user'=>$user]);
    }
    //Submit form update user admin
    public function postUpdateUser(Request $request)
    {
       $input =$request->all();

       $request->validate([
        'name' => 'required',
        'email'=> 'required|email|unique:users,id,' .$input['id'],
        'password' => 'required|min:6',
        'phone' => 'required|max:10',
        'address' => 'required',
       ]);

       $user = User::find($input['id']);
       $user->name = $input['name'];
       $user->email = $input['email'];
       $user->password = Hash::make($input['password']);
       $user->phone = $input['phone'];
       $user->address = $input['address'];
       $user->save();
       return redirect('listuser')->withSuccess('you have signed-in');
    }
}
