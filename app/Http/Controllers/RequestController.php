<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\RequestType;
use App\Models\RequestTypeCate;
use App\Models\RequestTypeLocal;

class RequestController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            $ticket = Ticket::paginate(5);
            return view('history', ['tickets' => $ticket]);
        } else {
            return view('layout.login');
        }
    }

    public function viewadd()
    {
        if (Auth::check()) {
            $request_types = RequestType::all();
            $req_cate = RequestTypeCate::with('requesttype')->get();
            $req_local = RequestTypeLocal::with('requesttypecate')->get();
            return view('addrequest', compact('request_types','req_cate','req_local'));
        } else {
            return view('layout.login');
        }
    }

    public function viewedit($id)
    {
        if (Auth::check()) {
            $ticket = Ticket::find($id);
            return view('editrequest', ['ticket' => $ticket]);
        } else {
            return view('layout.login');
        }
    }

    public function addrequst(Request $request)
    {
        $request->validate([
            'request_type' => 'required',
            'request_detail' => 'required',
            'subject' => 'required',
            'petugas_teknisi' => 'required',
            'devisi' => 'required',
            'regu' => 'required',
            'problem' => 'required',
            'pelapor' => 'required',
            'location' => 'required',
        ]);


        $data = [
            'request_type' => $request->request_type,
            'request_detail' => $request->request_detail,
            'subject' => $request->subject,
            'petugas_teknisi' => $request->petugas_teknisi,
            'devisi' => $request->devisi,
            'regu' => $request->regu,
            'problem' => $request->problem,
            'pelapor' => $request->pelapor,
            'location' => $request->location,
        ];

        if (Ticket::create($data)) {
            $tickets = Ticket::paginate(5);
            return redirect()
            ->route('history')
            ->with(['success' => 'Data Berhasil Ditambahkan!']);
        }
    }

    public function editrequest(Request $request)
    {
        $ticket = Ticket::find($request->id);
        $ticket->update([
                'petugas_teknisi' => $request->petugas_teknisi,
                'devisi' => $request->devisi,
                'regu' => $request->regu,
                'problem' => $request->problem,
                'pelapor' => $request->pelapor,
                'location' => $request->location,
                'notes' => $request->notes,
                'status' => $request->status,
            ]);

                return redirect()
                ->route('history')
                ->with(['success' => 'Data Berhasil Ditambahkan!']);
    }


    public function delreq($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()
        ->route('history');
    }
}
