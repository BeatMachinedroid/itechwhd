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

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('pegawai');
    }
}
