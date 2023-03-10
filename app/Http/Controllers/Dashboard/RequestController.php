<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
            $ticket = Ticket::orderBy('created_at', 'desc')->paginate(5);
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
        if ($request->input('checkbox') && $request->cc !== null ) {
            $data = [
                'category' => $request->category,
                'area' => $request->area,
                'sub_category' => $request->sub_category,
                'sub_category_area' => $request->sub_category_area,
                'request_detail' => $request->request_detail,
                'subject' => $request->subject,
                'petugas_teknisi' => $request->petugas_teknisi,
                'devisi' => $request->devisi,
                'regu' => $request->regu,
                'problem' => $request->problem,
                'pelapor' => $request->pelapor,
                'location' => $request->location,
            ];
            Ticket::create($request->all());
            Mail::send('email.emailadd', $data, function($message) use ($request) {
                $message->to($request->cc);
                $message->subject('Request ticket sent');
            });
        }else{
            Ticket::create($request->all());
        }
        return redirect()->route('history')->with('message','Data is saved successfully!');
    }

    public function editrequest(Request $request)
    {
        $ticket = Ticket::find($request->id);
        if ($request->input('checkbox') && $request->cc !== null ) {
            $data = [
                'category' => $request->category,
                'area' => $request->area,
                'sub_category' => $request->sub_category,
                'sub_category_area' => $request->sub_category_area,
                'request_detail' => $request->request_detail,
                'subject' => $request->subject,
                'petugas_teknisi' => $request->petugas_teknisi,
                'devisi' => $request->devisi,
                'regu' => $request->regu,
                'problem' => $request->problem,
                'pelapor' => $request->pelapor,
                'location' => $request->location,
            ];
            $ticket->update($request->all());
            Mail::send('email.emailadd', $data, function($message) use ($request) {
                $message->to($request->cc);
                $message->subject('Edit Request ticket sent');
            });
        }else{
            $ticket->update($request->all());
        }
        return redirect()->route('history')->with('message','Data is updated successfully!');
    }

    public function delreq($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()->route('history')->with('message','Data is deleted!');
    }
}
