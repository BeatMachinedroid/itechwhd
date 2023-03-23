<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Note;
use App\Models\Assets;
use App\Models\Faqs;
use App\Models\User;
use Carbon\Carbon;


class TicketController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            $data = Ticket::all();
            $area = Ticket::select('area' , DB::raw('count(*) as count'))->groupBy('area')->get();
            $area2 = Ticket::all();
            $areacount = Ticket::groupby('area')->count();
            $data1 = Assets::all();
            $data2 = Faqs::all();
            $data3 = User::all();
            $count = $data->count();
            $count1 = $data1->count();
            $count2 = $data2->count();
            $count3 = $data3->count();
            return view('welcome',
            compact('count',
                    'count1',
                    'count2',
                    'count3',
                    'data',
                    'data3',
                    'area',
                    'areacount',
                    'area2'
                ));
        }else{
            return view('layout.login');
        }
    }

    public function Cancel(Request $request)
    {
        $ticket = Ticket::find($request->id);
        $ticket->status = 'cancelled';
        $ticket->save();
        return back();
    }

}
