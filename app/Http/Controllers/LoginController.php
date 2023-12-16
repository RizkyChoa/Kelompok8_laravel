<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view("auth.login");
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data))
        {
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email Atau Password Salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success','Logout Berhasil!!');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:users,email',
            'nim'   => 'required',
            'password'=> 'required|min:6',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['nim'] = $request->nim;
        $data['password'] = bcrypt($request->password);

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($login))
        {
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email Atau Password Salah');
        }
    }
}
