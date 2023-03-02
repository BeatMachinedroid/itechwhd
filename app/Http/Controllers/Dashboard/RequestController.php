<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use Carbon\Carbon;
use App\Models\Ticket;
use App\Models\Note;
use App\Models\TextNotes;
use App\Models\Faqs;
use App\Models\RequestType;
use App\Models\RequestTypeCate;
use App\Models\RequestTypeLocal;

class RequestController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            $ticket = Ticket::whereYear('created_at', Carbon::now()->year)->paginate(5);
            return view('history', compact('ticket'));
        } else {
            return view('layout.login');
        }
    }

    public function viewDetail($id)
    {
        if (Auth::check()) {
            $note = Note::with(['user','tickets'])->get();
            $notes = TextNotes::with(['user','tickets'])->get();
            $ticket = Ticket::find($id);
            return view('detail', compact('ticket','note','notes'));
        } else {
            return view('layout.login');
        }
    }

    public function viewadd()
    {
        if (Auth::check()) {
            $request_types = RequestType::all();
            $faq = Faqs::all();
            // ==================================================================================
            return view('addrequest', compact(
                'request_types',
            ));
        } else {
            return view('layout.login');
        }
    }

    public function viewedit($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $ticket = Ticket::find($id);
            return view('editrequest', compact('ticket'));
        } else {
            return view('layout.login');
        }
    }

    public function addrequst(Request $request)
    {
        Ticket::create($request->all());
        if ($request->input('checkbox') && $request->cc !== null ) {
            Mail::send('email.emailadd', $data, function($message) use ($request) {
                $message->to($request->cc);
                $message->subject('Request ticket sent');
            });
        }
        return redirect()->route('history')->with('message','Data is saved successfully!');
    }

    public function editrequest(Request $request)
    {
        $ticket = Ticket::find($request->id);
        $ticket->update($request->all());

                return redirect()
                ->route('history')
                ->with('message','Data is updated successfully!');
    }

    public function delreq($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()->route('history')->with('message','Data is deleted!');
    }
}
