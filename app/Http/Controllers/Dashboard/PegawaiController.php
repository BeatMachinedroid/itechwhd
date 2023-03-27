<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PegawaiController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            $user = User::paginate(5);
            return view('pegawai',['user' => $user]);
        }else{
            return view('layout.login');
        }

    }

    public function edit($id)
    {
        if (Auth::check()) {
            $user = User::find(decrypt($id));
            return view('editpegawai',compact('user'));
        }else{
            return view('layout.login');
        }
    }

    public function proses(Request $request)
    {
        $user = User::find($request->id);
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' =>$request->location,
            'role' =>$request->role
        ]);
        return redirect()->route('pegawai')->with('message','Data is updated successfully!');
    }

    public function delete($id)
    {
        $user = User::find(decrypt($id));
        $user->delete();
        return redirect()->route('pegawai');
    }
}
