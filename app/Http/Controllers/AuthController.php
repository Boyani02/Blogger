<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect(route('feeds'));
        }
        return view('login');
    }

    function registration(){
        if(Auth::check()){
            return redirect(route('feeds'));
        }
        return view('registration');
    }

    function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('feeds'))->with("success", "You are now logged in");
        }

        return redirect(route('login'))->with("error","Invalid Credentials");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $data ['name'] = $request->name;
        $data ['email'] = $request->email;
        $data ['password'] = Hash::make($request->password);
        $user = User::create($data);

        if (!$user) {
            return redirect(route('registration'))->with("error","Registration failed");
        }

        return redirect(route('login'))->with("success", "Registration successful");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
