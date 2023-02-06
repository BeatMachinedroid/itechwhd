<?php

namespace App\Http\Controllers\Download;
use App\Models\Ticket;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function cetak_pdf($id)
    {
    	$ticket = Ticket::find($id);
    	$pdf = PDF::loadview('ticket_pdf', ['ticket' => $ticket]);
    	return $pdf->download('laporan-ticket-pdf.pdf');
    }
}
