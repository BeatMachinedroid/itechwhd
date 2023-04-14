<?php

namespace App\Exports;

use App\Models\Assets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class AssetExport implements FromView , ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $aset = Assets::all();
        return view('email.excel-asset', compact('aset'));
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
}
