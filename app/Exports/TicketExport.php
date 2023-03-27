<?php

namespace App\Exports;

use App\Models\Ticket;
use App\Models\Note;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class TicketExport implements FromView , ShouldAutoSize, WithStyles
{
    public function view(): View
    {
        $ticket = Ticket::all();
        $note = Note::all();
        return view('email.excel', compact('ticket' , 'note'));
    }

    public function styles(Worksheet $sheet)
    {

        $styleArray = [
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => '8db4e2',
                ],
                'endColor' => [
                    'argb' => '8db4e2',
                ],
            ],
        ];

        $sheet->getStyle('A1:L1')->applyFromArray($styleArray);

        $styleArray = [
            'font' => [
                'bold' => false,
                'size' => 14,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ];

        $sheet->getStyle('A:L')->applyFromArray($styleArray);
    }

    // public function columnWidths(): array
    // {
    //     // return [
    //     //     'B' => 55,
    //     //     'c' => 55,
    //     // ];
    // }
}

