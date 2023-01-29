<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('layout.login');
        }
    }


    public function proses(Request $request)
    {
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::Attempt($data)) {
            return redirect('/home');
        }else{
            Session::flash('error','email and password is not valid');
            return redirect('/');
        }
    }

    public function pReg(Request $request)
    {
        Session::flash('email',$request->email);
        $request->validate([
            'username'=>'required',
            'email'=>'required|unique:users',
            'phone'=>'required',
            'location'=>'required',
            'password' => 'required|confirmed|min:6'
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' =>$request->location,
            'password' => bcrypt($request->password)
        ];


            if (User::create($data)) {
                return redirect('/home');
            }else{
                Session::flash('error','email and password is not valid');
                return redirect('/');
            }

    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    public function register()
    {
        return view('layout.register');
    }

}
