<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $request->validate(['email'=>'required|email','password'=>'required']);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials, $request->has('remember'));
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index');
        }

        return redirect()->route('admin.login')->with('error', 'Email hoặc mật khẩu không đúng');
    }

    public function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function showRegisterForm(){
        return view('admin.auth.register');
    }

    public function register(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('admin.index');
    }
}
