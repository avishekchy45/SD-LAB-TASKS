<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function logincheck(request $req)
    {
        $user = $req->user;
        $pass = $req->pass;
        $data = Login::where('email', '=', $user)
            ->where('pass', '=', $pass)
            ->first();
        //dd($data);
        if (!$data)
            return redirect()->back()->with('msg', 'Invalid Username or Password');
        $req->session()->put('username', $data->email);
        $req->session()->put('userrole', $data->role);
        return redirect('/dashboard');
    }
    public function dashboard(){
        return view('home');
    }
}
