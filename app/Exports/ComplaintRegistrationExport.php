<?php

namespace App\Exports;

use App\Models\ComplaintRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

// class ComplaintRegistrationExport implements FromCollection, WithHeadings
class ComplaintRegistrationExport implements FromCollection
{
    public function headings(): array
    {
        return [
            'DATE',
            'PRIORITY CODE',
            'TICKET ID',
            'PREVIOUS COMPLAINT TICKET ID',
            'STATUS',
            'NAME',
            'EMAIL',
            'PHONE',
            'SERIAL NUMBER',
            'PART NUMBER',
            'PURCHASE DATE',
            'WARRANTY CHECK',
            'CHANNEL PURCHASE',
            'CITY',
            'STATE',
            'COUNTRIES',
            'ADDRESS',
            'PIN CODE',
            'ISSUE',
            'PURCHASE INVOICE'
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return DB::table('users')->where('is_admin', 0)->get();
        // return ComplaintRegistration::select("ticketID", "status", "name", "email", "phone", "productSerialNo", "productPartNo", "purchaseDate", "warrantyCheck", "channelPurchase", "city", "state", "countries", "pinCode", "address", "issue")->get();

        $url = 'https://support.novita-global.com/';

        $export_data =  ComplaintRegistration::select("created_at", "priority", "ticketID", "ticketOld", "status", "name", "email", "phone", "productSerialNo", "productPartNo", "purchaseDate", "warrantyCheck", "channelPurchase", "city", "state", "countries", "address", "pinCode", "issue", "purchaseInvoice")->get();

        $data_array[] = array(
            'DATE',
            'PRIORITY CODE',
            'TICKET ID',
            'PREVIOUS COMPLAINT TICKET ID',
            'STATUS',
            'NAME',
            'EMAIL',
            'PHONE',
            'SERIAL NUMBER',
            'PART NUMBER',
            'PURCHASE DATE',
            'WARRANTY CHECK',
            'CHANNEL PURCHASE',
            'CITY',
            'STATE',
            'COUNTRIES',
            'ADDRESS',
            'PIN CODE',
            'ISSUE',
            'PURCHASE INVOICE'
        );

        // dd($export_data);
        // $exportnewdata = [];


        foreach ($export_data as $data) {

            $cityname = \App\Models\City::where('id', $data->city)->first();

            // if ($cityname != null) {
            //     // dd($cityname->name);
            //     $city = $cityname->name;
            //     dd($city);
            // } else {
            //     // dd($data->city);
            //     $city = $data->city;
            //     dd($city);
            // }

            $statename = \App\Models\State::where('id', $data->state)->first();
            $countryname = \App\Models\Country::where('id', $data->countries)->first();
            $data_array[] = array(
                'created_at'        => $data->created_at,
                'priority'          => $data->priority,
                'ticketID'          => $data->ticketID,
                'ticketOld'         => $data->ticketOld,
                'status'            => $data->status,
                'name'              => $data->name,
                'email'             => $data->email,
                'phone'             => $data->phone,
                'productSerialNo'   => $data->productSerialNo,
                'productPartNo'     => $data->productPartNo,
                'purchaseDate'      => $data->purchaseDate,
                'warrantyCheck'     => $data->warrantyCheck,
                'channelPurchase'   => $data->channelPurchase,
                // 'city'              => $data->city,
                // 'state'             => $data->state,
                // 'countries'         => $data->countries,
                'city'              => $cityname->name,
                'state'             => $statename->name,
                'countries'         => $countryname->name,
                'address'           => $data->address,
                'pinCode'           => $data->pinCode,
                'issue'             => $data->issue,
                'purchaseInvoice'   => $url . $data->purchaseInvoice,
            );
        }
        // dd($data_array);
        return collect($data_array);
    }
}
