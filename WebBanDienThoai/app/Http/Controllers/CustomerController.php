<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class CustomerController extends Controller
{
    
    //Registes client
    public function indexRegister(){
        return view('cus_register');
    }
    public function authRegister(Request $request)
    {
       $request->validate([
        'name' =>'required',
        'email' => 'required|email|unique:users',
        'password' =>'required|min:6',
        'phone' =>'required|max:10',
        'address' =>'required',
   
       ]);
       $data = $request->all();
       User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'phone' => $data['phone'],
        'address' => $data['address'],      
    ]);
    return redirect()->route('user.cus_login');
     

}
 // login client
 public function indexLogin(){
    return view('cus_login');
   }
 public function authLogin(Request $request)
 {
    $request->validate([
        'email'=>'required',
        'password' =>'required',
    ]);
    $credentials = $request->only('email','password');
    if (Auth::attempt($credentials)) {
        return redirect()->intended('Home')->withSuccess('Signed in');
    }
    return redirect('login')->withSuccess('Login details are not valid');
 }



    
}
