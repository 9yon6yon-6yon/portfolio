<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;


class RegisterUser extends Controller
{
    private $hashedPassword;
    public function reg_index()
    {
        return view('register');
    }
    public function login_index()
    {
        return view('login');
    }
    public function logIn(Request $values)
    {
        $values->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($values->only('email', 'password'))) {
            return redirect('dashboard');
        }
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('index');
        }
        return redirect('login');
    }

    public function signUp(Request $values)
    {
        $values->validate([
            'user_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|same:password|min:8'

        ]);


        $user = new Users();
        $user->username = $values['user_name'];
        $user->email = $values['email'];
        $this->hashedPassword = Hash::make($values['password'], [
            'rounds' => 12,
        ]);
        $user->password = $this->hashedPassword;
        $user->save();
        return redirect('login');
    }

    public function logout()
    {
        FacadesSession::flush();
        Auth::logout();
    }
}
