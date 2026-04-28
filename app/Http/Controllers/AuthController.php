<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $secret = 'hmmyaa';
        $credentials = $request->validate([
            'username'  => ['required'],
            'password'  => ['required']
        ]);

        $credentials['password'] = $credentials['password'] . $secret;

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::User();
            session([
                'id'        =>  $user->id,
                'username'  =>  $user->username,
                'name'      =>  $user->name
            ]);
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'username'  => 'Username atau Password salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
