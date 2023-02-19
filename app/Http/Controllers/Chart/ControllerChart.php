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
            $data3 = Ticket::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        // $data1 = Ticket::whereMonth('created_at', Carbon::now()->month)->get();
        return view('chart3', compact('data3'));
        }
    }

    public function viewMonth()
    {
        if(Auth::check()){
            $data2 = Ticket::whereMonth('created_at', Carbon::now()->month)->get();
            return view('chart2', compact('data2'));
        }
    }

    public function viewYear()
    {
        if(Auth::check()){
            $data = Ticket::whereYear('created_at', Carbon::now()->year)->get();
            return view('chart', compact('data'));
        }
    }

}


