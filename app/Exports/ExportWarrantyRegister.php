<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
use App\Models\Warranty_registration;


class ExportWarrantyRegister implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'Customer Name',
            'Email',
            'Phone',
            'Product Type',
            'Product Series',
            'Product Model',
            'Product Number',
            'Product Configuration',
            'Serial Number',
            'Reseller Name',
            'Product Purchase Date',
        ];
    }

    public function collection()
    {
        return Warranty_registration::all();
    }
}
