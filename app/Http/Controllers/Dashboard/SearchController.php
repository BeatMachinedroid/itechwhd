<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Ticket;

class SearchController extends Controller
{
    public function SearchHistory(Request $request)
    {
        $number = $request->input('number');
        $status = $request->input('status');
        $contains = $request->input('contains');


        if(empty($number) && !empty($status) && empty($contains)){
            $ticket = Ticket::where('status', 'like', '%' . $status . '%')->paginate(5);
        }

        if(empty($status) && empty($contains) && !empty($number)){
            $ticket = Ticket::where('id', $number)->paginate(5);
        }

        if(!empty($contains) && empty($number) && empty($status)){
            $ticket = Ticket::where('area', 'like', $contains . '%')->paginate(5);
        }

        if(empty($number) && $status == 'all' && empty($contains)){
            $ticket = Ticket::paginate(5);
        }

        return view('history', compact('ticket'));
    }

    public function SearchAsset(Request $request)
    {
        if($request->contains !== null){
            $asset = Asset::where('subject', $request->contains)->paginate(5);
        }

        return view('asset', compact('asset'));

    }

    public function SearchFaqs(Request $request)
    {
        if($request->category !== null){
            $faqs = Faqs::where('status', 'like', '%' . $request->status . '%')->paginate(5);
        }
        else if($request->contains !== null){
            $faqs = Faqs::where('status', 'like', '%' . $request->status . '%')->paginate(5);
        }
        else{
            $faqs = Faqs::paginate(5);
        }
            return view('faqs', compact('faqs'));
    }

    public function SearchPegawai(Request $request)
    {

    }
}
