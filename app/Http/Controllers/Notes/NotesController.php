<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Note;
use App\Models\TextNotes;
use Mail;

class NotesController extends Controller
{


    public function addnotes(Request $request)
    {
        Note::create($request->all());

        if ($request->input('checkbox') && $request->cc !== null ) {
            Mail::send('email.emailadd', $data, function($message) use ($request) {
                $message->to($request->cc);
                $message->subject('notes is added');
            });
        }

        return redirect()->back();
    }

    public function textnote(Request $request)
    {
        TextNotes::create($request->all());

        if ($request->input('checkbox') && $request->cc !== null ) {
            Mail::send('email.emailadd', $data, function($message) use ($request) {
                $message->to($request->cc);
                $message->subject('notes is added');
            });
        }

        return redirect()->back();

    }
}
