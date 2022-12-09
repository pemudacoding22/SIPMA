<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // Cek apakah login valid
        if(Auth::attempt($credentials)) {
            // Cek apakah user status = active
            if(Auth::User()->status != 'active') {
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet. Please contact admin !');
                return redirect('/login');
            };  
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login invalid !');
        return redirect('/login');

        // if (Auth::attempt($credentials)) {
        //     // Cek apakah user status = active
        //     if (Auth::User()->status != 'active') {
        //         Session::flash('status', 'failed');
        //         Session::flash('message', 'Your account is not active yet. Please contact admin !');
        //         return redirect('/login');
        //     };
        // }
        // Session::flash('status', 'failed');
        // Session::flash('message', 'Login Invalid !');
        // return redirect('/');
    }
}
