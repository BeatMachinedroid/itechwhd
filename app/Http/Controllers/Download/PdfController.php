<?php

namespace App\Http\Controllers\Download;
use App\Models\Ticket;
use App\Models\Note;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function cetak_pdf($id)
    {
    	$ticket = Ticket::find($id);
        $note = Note::where('ticket', $ticket)->first();
    	$pdf = PDF::loadview('ticket_pdf', compact('ticket','note'));
        if ($note) {
            return $pdf->download('laporan-ticket-pdf.pdf');
        }
        else{
            return redirect()->route('detail.addnote')->with('message', 'Notes is null, please add a note first.');
        }

    }
}
