<?php

namespace App\Http\Controllers\Chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ControllerChart extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            return view('chart');
        }
    }
}
