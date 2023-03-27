<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use DB;
use Carbon\Carbon;
use Mail;
use Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('dashboard');
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
            return redirect()->route('index');
        }else{
            Session::flash('error','email and password is not valid');
            return redirect()->route('login');
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
                return redirect()->route('login');
            }else{
                return redirect()->route('register')->with('error','your email address is already registered');
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

    public function resetview()
    {
        return view('layout.reset');
    }

    public function submitemail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
          ]);

        Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetpw($token) {
        return view('email.forgetPasswordLink', ['token' => $token]);
     }

     public function submitResetPasswordForm(Request $request)
     {
         $request->validate([
             'email' => 'required|email|exists:users',
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);

         $updatePassword = DB::table('password_resets')
                             ->where([
                               'email' => $request->email,
                               'token' => $request->token
                             ])
                             ->first();

         if(!$updatePassword){
             return back()->withInput()->with('error', 'Invalid token!');
         }

         $user = User::where('email', $request->email)
                     ->update(['password' => Hash::make($request->password)]);

         DB::table('password_resets')->where(['email'=> $request->email])->delete();

         return redirect('login')->with('message', 'Your password has been changed!');
     }

     public function ViewSetting($id)
     {
        if (Auth::check()) {
            $user = User::find(decrypt($id));
            return view('Setting', compact('user'));
        } else {
            return view('layout.login');
        }
     }

     public function AccountSetting(Request $request)
     {
        $user = User::find($request->id);
        if(empty($request->password)){
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'location' =>$request->location,
            ]);
        }else{
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'location' =>$request->location,
                'password' => bcrypt($request->password),
            ]);
        }
        return back()->with('message','Data is updated successfully');
     }
}
