<?php

namespace App\Http\Controllers\Download;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TicketExport;

class ExcelController extends Controller
{
    public function cetak_excel()
    {
        return Excel::download(new TicketExport, 'Tickets.xlsx');
    }
}
