<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    //  Display login page.
    public function Login()
    {
        return view('login');
    }
    // Handle account login request
    public function loginUser(Request $request)
    {
        Session::flash('email', $request->email);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            //gagal
            return redirect()->intended('/');
        } else {
            //berhasil
            return redirect('login')->withErrors('username and password not compatible');
        }
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);
        try {
            User::create([
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                
                'password' => Hash::make($request->input('password')),
            ]);
            return redirect('/login')->with('success', 'Operation successful!');
        } catch (\Exception $e) {
            // Handle the exception
            Log::error($e->getMessage());

            // Flash an error message to the session for display in the view
            return redirect()->back()->withErrors(['error' => 'Operation failed. Please try again.']);
        }
    }
    public function showRegister()
    {
        return view('register');
    }
}
