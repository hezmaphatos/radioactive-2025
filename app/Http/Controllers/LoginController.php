<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        // kalo udh login, ga bs balik ke login
        if(Auth::check()){
            return redirect()->intended('/');
        }
        return view('Login.login');
    }

    public function signup_view ()
    {
        return view('Auth.register');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:20',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email; // email harus unik
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login')->with('success', 'Your account has been created!');

    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            // regenerate biar ga kena session fixation
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed!');
    }


    public function logout()
    {
        return route('login');
    }
}
