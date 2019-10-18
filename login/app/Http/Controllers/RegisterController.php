<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $this->validation($request);
        User::create([
            'email'         =>  $request['email'],
            'password'      =>  Hash::make($request['password']),
            ]);
        return back()->with('Status', 'Registered successfully!');
    }

    public function validation($request)
    {
        return $this->validate($request, [
            'email'         =>  'required|unique:users|email',
            'password'      =>  'required|confirmed|alphaNum|min:6'
        ]);
    }
}
