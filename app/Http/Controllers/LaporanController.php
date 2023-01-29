<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            return view('laporan');
        }else{
            return view('layout.login');
        }

    }

    public function viewdetail()
    {
        if (Auth::check()) {
            return view('detail');
        }else{
            return view('layout.login');
        }

    }
}
