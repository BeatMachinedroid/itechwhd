<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Ticket;

class SearchController extends Controller
{
    public function SearchHistory(Request $request)
    {
        if($request->status !== null){
            $ticket = Ticket::where('status', 'like', '%' . $request->status . '%')->paginate(5);
        }

        else if($request->number !== null){
            $ticket = Ticket::where('id', $request->number)->paginate(5);
        }

        else if($request->contains !== null){
            $ticket = Ticket::where('subject', $request->contains)->paginate(5);
        }
        else{
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
