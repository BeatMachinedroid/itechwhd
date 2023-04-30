<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Note;
use App\Models\Ticket;
use App\Models\TextNotes;
use Mail;

class NotesController extends Controller
{


    public function addnotes(Request $request)
    {
        if ($request->input('checkbox') && $request->cc !== null ) {
            Note::create($request->all());
            $note = Note::Where('ticket', $request->ticket)->first();
            $tickets = Ticket::find($request->ticket);
            Mail::send('email.noteadd', ['tickets' => $tickets, 'note' => $note] , function($message) use ($request, $tickets, $note) {
                $message->to($request->cc);
                $message->subject('notes is added');
            });
        }else{
            Note::create($request->all());
        }
        return redirect()->back();
    }

}
