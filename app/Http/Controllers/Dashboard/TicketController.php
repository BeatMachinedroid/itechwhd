<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Assets;
use App\Models\Faqs;
use App\Models\User;
use Carbon\Carbon;


class TicketController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            $data = Ticket::whereMonth('created_at', Carbon::now()->month)->get();
            $data1 = Assets::whereMonth('created_at', Carbon::now()->month)->get();
            $data2 = Faqs::whereMonth('created_at', Carbon::now()->month)->get();
            $data3 = User::all();
            $count = $data->count();
            $count1 = $data1->count();
            $count2 = $data2->count();
            $count3 = $data3->count();
            return view('welcome', compact('count','count1','count2','count3'));
        }else{
            return view('layout.login');
        }
    }


}
