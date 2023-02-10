<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
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
            return view('history', compact('ticket'));
        } else {
            return view('layout.login');
        }
    }

    public function viewDetail($id)
    {
        if (Auth::check()) {
            $ticket = Ticket::find($id);
            return view('detail', compact('ticket'));
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
            $ticket = Ticket::find($id);
            return view('editrequest', compact('ticket'));
        } else {
            return view('layout.login');
        }
    }

    public function addrequst(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'sub_category' => 'required',
            'sub_category_type' => 'required',
            'area' => 'required',
            'subject' => 'required',
            'request_detail' => 'required',
            'problem' => 'required',
            'petugas_teknisi' => 'required',
            'devisi' => 'required',
            'regu' => 'required',
            'pelapor' => 'required',
            'cc' => 'required',
            'location' => 'required',
        ]);


        if ($request->sub_category_type == null && $request->petugas_teknisi == null && $request->devisi == null) {

            $data = [
                'category' => $request->category,
                'sub_category' => $request->sub_category,
                // 'sub_category_type' => $request->sub_category_type,
                'area' => $request->area,
                'subject' => $request->subject,
                'problem' => $request->problem,
                'request_detail' => $request->request_detail,
                // 'petugas_teknisi' => $request->petugas_teknisi,
                // 'devisi' => $request->devisi,
                'regu' => $request->regu,
                'pelapor' => $request->pelapor,
                'location' => $request->location,
            ];

            if ($request->input('checkbox') && $request->cc !== null ) {
                Mail::send('email.template', $data, function($message) use ($request) {
                    $message->to($request->cc);
                    $message->subject('Request ticket sent');
                });

                return view('email.request_tickets', [])
            }

        }else if($request->sub_category_type !== null && $request->petugas_teknisi == null && $request->devisi == null){
            $data = [
                'category' => $request->category,
                'sub_category' => $request->sub_category,
                'sub_category_type' => $request->sub_category_type,
                'area' => $request->area,
                'subject' => $request->subject,
                'problem' => $request->problem,
                'request_detail' => $request->request_detail,
                // 'petugas_teknisi' => $request->petugas_teknisi,
                // 'devisi' => $request->devisi,
                'regu' => $request->regu,
                'pelapor' => $request->pelapor,
                'location' => $request->location,
            ];
        }else{
            $data = [
                'category' => $request->category,
                'sub_category' => $request->sub_category,
                'sub_category_type' => $request->sub_category_type,
                'area' => $request->area,
                'subject' => $request->subject,
                'problem' => $request->problem,
                'request_detail' => $request->request_detail,
                'petugas_teknisi' => $request->petugas_teknisi,
                'devisi' => $request->devisi,
                'regu' => $request->regu,
                'pelapor' => $request->pelapor,
                'location' => $request->location,
            ];
        }

        // return $request;

        if (Ticket::create($data)) {
            $ticket = Ticket::paginate(5);
            return view('history',compact('ticket'));
        }

    }

    public function editrequest(Request $request)
    {
        $ticket = Ticket::find($request->id);
        $ticket->update($request->all());

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
