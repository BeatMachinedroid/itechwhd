<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Faqs;
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

    public function viewadd(Request $request)
    {
        if (Auth::check()) {
            $request_types = RequestType::all();
            $faq = Faqs::all();
            // ==================================================================================
            $req_cate1 = RequestTypeCate::with('requesttype')->where('id_request', 1)->get();
            $req_cate2 = RequestTypeCate::with('requesttype')->where('id_request', 2)->get();
            $req_cate3 = RequestTypeCate::with('requesttype')->where('id_request', 3)->get();
            $req_cate4 = RequestTypeCate::with('requesttype')->where('id_request', 4)->get();
            $req_cate5 = RequestTypeCate::with('requesttype')->where('id_request', 5)->get();
            $req_cate6 = RequestTypeCate::with('requesttype')->where('id_request', 6)->get();
            $req_cate7 = RequestTypeCate::with('requesttype')->where('id_request', 7)->get();
            $req_cate8 = RequestTypeCate::with('requesttype')->where('id_request', 8)->get();
            $req_cate9 = RequestTypeCate::with('requesttype')->where('id_request', 9)->get();
            $req_cate10 = RequestTypeCate::with('requesttype')->where('id_request', 10)->get();
            $req_cate11 = RequestTypeCate::with('requesttype')->where('id_request', 11)->get();
            $req_cate12 = RequestTypeCate::with('requesttype')->where('id_request', 12)->get();
            // ==================================================================================
            $req_local = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 2)->get();
            $req_local2 = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 3)->get();
            $req_local3 = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 4)->get();
            $req_local4 = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 5)->get();
            $req_local5 = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 6)->get();
            $req_local6 = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 7)->get();
            $req_local7 = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 8)->get();
            $req_local8= RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 9)->get();
            $req_local9 = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', 10)->get();
            // $req_local10 = RequestTypeLocal::with('requesttypecate')->where('id_request_cate', )->get();
            return view('addrequest', compact(
                'request_types',

                'req_cate1',
                'req_cate2',
                'req_cate3',
                'req_cate4',
                'req_cate5',
                'req_cate6',
                'req_cate7',
                'req_cate8',
                'req_cate9',
                'req_cate10',
                'req_cate11',
                'req_cate12',
                'req_local',
                'req_local2',
                'req_local3',
                'req_local4',
                'req_local5',
                'req_local6',
                'req_local7',
                'req_local8',
                'req_local9',
            ));
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
        // $request->validate([
        //     'id_request' => 'required',
        //     'id_request_cate' => 'required',
        //     'id_request_local' => 'required',
        //     'request_detail' => 'required',
        //     'subject' => 'required',
        //     'petugas_teknisi' => 'required',
        //     'devisi' => 'required',
        //     'regu' => 'required',
        //     'problem' => 'required',
        //     'pelapor' => 'required',
        //     'location' => 'required',
        // ]);


        // $data = [
        //     'id_request' => $request->id_request,
        //     'id_request_cate' => $request->id_request_cate,
        //     'id_request_local' => $request->id_request_local,
        //     'request_detail' => $request->request_detail,
        //     'subject' => $request->subject,
        //     'petugas_teknisi' => $request->petugas_teknisi,
        //     'devisi' => $request->devisi,
        //     'regu' => $request->regu,
        //     'problem' => $request->problem,
        //     'pelapor' => $request->pelapor,
        //     'location' => $request->location,
        // ];

        // if (Ticket::create($data)) {
        //     $ticket = Ticket::paginate(5);
        //     return view('history',['tickets'=>$ticket]);
        // }

        return $request;
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
