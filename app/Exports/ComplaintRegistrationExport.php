<?php

namespace App\Exports;

use App\Models\ComplaintRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class ComplaintRegistrationExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'TICKET ID',
            'STATUS',
            'NAME',
            'EMAIL',
            'PHONE',
            'SERIAL NUMBER',
            'PART NUMBER',
            'PURCHASE DATE',
            'WARRANTY CHECK',
            'CHANAL PURCHASE',
            'CITY',
            'STATE',
            'COUNTRIES',
            'PIN CODE',
            'ISSUE',
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return DB::table('users')->where('is_admin', 0)->get();
        // return ComplaintRegistration::select("ticketID", "status", "name", "email", "phone", "productSerialNo", "productPartNo", "purchaseDate", "warrantyCheck", "channelPurchase", "city", "state", "countries", "pinCode", "issue")->get();
        return DB::table('complaint_registrations')->join('countries', 'countries.id', '=', 'states.country_id')
        ->join('states', 'states.id', '=', 'cities.state_id')
        ->join('cities', 'cities.id', '=', 'states.state_id')
        ->select('complaint_registrations.ticketID', 'complaint_registrations.status', 'complaint_registrations.name', 'complaint_registrations.email', 'complaint_registrations.phone', 'complaint_registrations.productSerialNo', 'complaint_registrations.productPartNo', 'complaint_registrations.purchaseDate', 'complaint_registrations.warrantyCheck', 'complaint_registrations.channelPurchase', 'cities.name as cityName', 'states.name as statesName', 'countries.name as countrieName', 'complaint_registrations.pinCode', 'complaint_registrations.issue')->get();
    }
}
