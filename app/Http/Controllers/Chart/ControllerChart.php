<?php

namespace App\Http\Controllers\Chart;
use App\Models\Ticket;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ControllerChart extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            $data = Ticket::all();
        // $data1 = Ticket::whereMonth('created_at', Carbon::now()->month)->get();
        return view('chart3', compact('data'));
        }
    }

    public function viewMonth()
    {
        if(Auth::check()){
            $data = Ticket::all();
            return view('chart2', compact('data'));
        }
    }

    public function viewYear()
    {
        if(Auth::check()){
            $data = Ticket::all();
            return view('chart', compact('data'));
        }
    }

}


