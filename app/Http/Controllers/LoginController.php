<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function login(){
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $data = $request->only(['username', 'password']);
        if (Auth::attempt($data)) {
            return redirect()->route('index')->with('loginSuccess', 'Login Successfull');
        } else {
            return redirect()->back()->with('loginError', 'Incorrect account or password !');
        }
    }

    public function register(){
        return view('register');
    }
    public function postRegister(Request $request)
    {
        $data = $request->all();
        User::create($data);
        return redirect()->route('login')->with('message', 'Register Successfull');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function loginAdmin() {
        $accounts = User::query()->get();
        return view('admin.index', compact('accounts'));
    }

    public function update(){
        return view('update');
    }
}
