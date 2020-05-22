<?php

namespace App\Exports;

use App\Inquiries;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;

use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class InquiriesExport implements FromQuery, Responsable, WithHeadings, WithMapping
{
    use Exportable;

    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    private $fileName = 'inquries.xlsx';


    public function query()
    {
        return Inquiries::query();
    }

    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_DATE_DATETIME,
        ];
    }

    public function map($inquiries): array
    {
        return [
            $inquiries->created_at,
            $inquiries->last_name,
            $inquiries->first_name,
            $inquiries->company,
            $inquiries->email,
            $inquiries->contact_no,
            $inquiries->inquiry,
        ];
    }

    public function headings(): array
    {
        return [
            'Inquiry Date',
            'Last Name',
            'First Name',
            'Company',
            'Email',
            'Contact No',
            'Inquiry',
        ];
    }
}
