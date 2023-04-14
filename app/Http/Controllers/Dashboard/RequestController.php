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
use App\Models\Assets;
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
            $note = Note::where('ticket', decrypt($id))->with('user')->get();
            $ticket = Ticket::find(decrypt($id));
            $asset = Assets::all();
            return view('detail', compact('ticket','note','asset'));
        } else {
            return view('layout.login');
        }
    }

    public function viewadd()
    {
        if (Auth::check()) {
            $request_types = RequestType::all();
            $faq = Faqs::all();
            $asset = Assets::all();
            // ==================================================================================
            return view('addrequest', compact(
                'request_types',
                'asset'
            ));
        } else {
            return view('layout.login');
        }
    }

    public function viewedit($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $ticket = Ticket::find(decrypt($id));
            return view('editrequest', compact('ticket'));
        } else {
            return view('layout.login');
        }
    }

    public function addrequst(Request $request)
    {
        if ($request->input('checkbox') && $request->cc !== null ) {
            $file = $request->file('image');
            $category = $request->input('category');
            $area = $request->input('area');
            $sub_category = $request->input('sub_category');
            $sub_category_area = $request->input('sub_category_area');
            $request_detail = $request->input('request_detail');
            $subject = $request->input('subject');
            $petugas_teknisi = $request->input('petugas_teknisi');
            $devisi = $request->input('devisi');
            $regu = $request->input('regu');
            $problem = $request->input('problem');
            $pelapor = $request->input('pelapor');
            $location = $request->input('location');

            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $originalName = $file->getClientOriginalName();
                $file->storeAs('public/Report/', $originalName);
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
                    'image' => $originalName,
                ];
                    $ticket = new Ticket;
                    $ticket->create($data);

                    $tickets = Ticket::Where('created_at', Carbon::now())->first();

                    Mail::send('email.emailadd', ['tickets' => $tickets], function($message) use ($request, $tickets) {
                    $message->to($request->cc);
                    $message->subject('Request Report');
            });
        }
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
                $ticket = new Ticket;
                $ticket->create($data);

                $tickets = Ticket::Where('created_at', Carbon::now())->first();

                Mail::send('email.emailadd', ['tickets' => $tickets] , function($message) use ($request, $tickets) {
                $message->to($request->cc);
                $message->subject('Request Report');
            });
        }else{
            $file = $request->file('image');
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $originalName = $file->getClientOriginalName();
                $file->storeAs('public/Report/', $originalName);
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
                    'image' => $originalName,
                ];
                    $ticket = new Ticket;
                    $ticket->create($data);
            }
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
                $ticket = new Ticket;
                $ticket->create($data);
        }
        return redirect()->route('history')->with('message','Data is saved successfully!');
    }

    public function editrequest(Request $request)
    {
        $tickets = Ticket::find($request->id);
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
            $tickets->update($request->all());
            Mail::send('email.emailedit', ['tickets' => $tickets] , function($message) use ($request, $tickets) {
                $message->to($request->cc);
                $message->subject('Edit Request Report');
            });
        }else{
            $tickets->update($request->all());
        }
        // return $request;
        return redirect()->route('history')->with('message','Data is updated successfully!');
    }

    public function delreq($id)
    {
        $ticket = Ticket::find(decrypt($id));
        $ticket->delete();
        return redirect()->route('history')->with('message','Data is deleted!');
    }
}
