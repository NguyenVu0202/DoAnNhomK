<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Session;

class CustomerController extends Controller
{
    //Clients
    //  Login Page
    public function login(){
        return view('cus_login');
        
    }
    //Customer Login
    public function authLogin(Request $request)
   {
    $data = [
        'email' => $request->email,
        'password' => $request->password
      
    ];
    if (Auth::attempt($data)) {
        return view('/welcome');
    }
    return view('/cus_login',[
        'message' => 'sai tai khoan hoac mat khau, vui long nhap lai'
    ]);
    }


}
