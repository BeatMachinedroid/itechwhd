<?php

namespace App\Http\Controllers\Chart;
use Illuminate\Support\Facades\DB;
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
            $area = Ticket::select( DB::raw('count(*) as count'),'area', DB::raw('DATE_FORMAT(created_at,"%d-%M-%y") as date'))
            // ->where('created_at',[now()->subDays(7)])
            ->groupBy('date','area')
            ->orderBy('date','asc')->get();
        // $data1 = Ticket::whereMonth('created_at', Carbon::now()->month)->get();
        return view('chart3', compact('data','area'));
        }
    }

    public function viewMonth()
    {
        if(Auth::check()){
            $data = Ticket::all();
            $area = Ticket::select( DB::raw('count(*) as count'),'area', DB::raw('MONTHNAME(created_at) as month'))
            ->groupBy('month','area')->get();
            return view('chart2', compact('data','area'));
        }
    }

    public function viewYear()
    {
        if(Auth::check()){
            $data = Ticket::all();
            $area = Ticket::select( DB::raw('count(*) as count'),'area', DB::raw('YEAR(created_at) as year'))
            ->groupBy('year','area')->get();
            return view('chart', compact('data','area'));
        }
    }

}


