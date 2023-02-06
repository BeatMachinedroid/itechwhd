<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            return view('chart');
        }
    }
}
