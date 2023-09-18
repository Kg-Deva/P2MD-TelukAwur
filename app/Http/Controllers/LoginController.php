<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function postlogin(Request $request) {
        if(Auth::attempt($request->only('email','password'))) {
            return redirect('/administrator')->with('success', 'Login Berhasil');
        }
        return redirect('/login')->with('error', 'Login Gagal');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

   
}
