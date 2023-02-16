<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

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
        $this->hashedPassword = "";
        if (Hash::check($values['password'], $this->hashedPassword )) {
            return view('index');
        }
    }

    public function signUp(Request $values)
    {
        $data = $values->all();
        echo '<pre>';
        print_r($data);
        
        $user = new Users();
        $user->username = $values['user_name'];
        $user->email = $values['email'];
        $this->hashedPassword = Hash::make($values['password'], [
            'rounds' => 12,
        ]);
        $user->password = $this->hashedPassword;
        $user->save();
        return redirect('dashboard');
    }
}
