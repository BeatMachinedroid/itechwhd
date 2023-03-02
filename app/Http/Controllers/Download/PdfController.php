<?php
namespace App\Http\Controllers\Download;
use App\Models\Ticket;
use App\Models\TextNotes;
use App\Models\Note;
use App\Models\Assets;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function cetak_pdf($id)
    {
        $note = Note::where('ticket', $id)->first();
    	$ticket = Ticket::find($id);
    	$pdf = PDF::loadview('ticket_pdf', compact('ticket','note'));
        if ($pdf) {
            return $pdf->download('laporan-ticket-pdf.pdf');
        }
        else{
            return redirect()->route('detail.addnote')->with('message', 'Notes is null, please add a note first.');
        }

    }

    public function cetak_pdf_text($id)
    {
        $note = TextNotes::where('ticket', $id)->first();
    	$ticket = Ticket::find($id);
    	$pdf = PDF::loadview('ticket_pdf_text', compact('ticket','note'));
        if ($pdf) {
            return $pdf->download('laporan-ticket-pdf.pdf');
        }
        else{
            return redirect()->route('detail.addnote')->with('message', 'Notes is null, please add a note first.');
        }
    }

    public function cetak_asset_pdf($id)
    {
    	$asset = Assets::find($id);
    	$pdf = PDF::loadview('asset_pdf', compact('asset'));
        if ($pdf) {
            return $pdf->download('laporan-assets-pdf.pdf');
        }
        else{
            return redirect()->route('detail.addnote')->with('message', 'Notes is null, please add a note first.');
        }
    }

}
