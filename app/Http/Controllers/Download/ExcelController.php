<?php

namespace App\Http\Controllers\Download;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TicketExport;
use App\Exports\AssetExport;

class ExcelController extends Controller
{
    public function cetak_excel()
    {
        return Excel::download(new TicketExport, 'Report.xlsx');
    }

    public function cetak_excel_aset()
    {
        return Excel::download(new AssetExport, 'Assets.xlsx');
    }
}
