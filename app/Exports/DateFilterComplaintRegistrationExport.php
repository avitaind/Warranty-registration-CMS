<?php

namespace App\Exports;

use App\Models\ComplaintRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Carbon\Carbon;

class DateFilterComplaintRegistrationExport implements FromCollection
{
    public function rules()
    {
        return [
            'start_date' => 'required',
            'end_date' => 'required',
        ];
    }

    public function collection()
    {

        if (request()->start_date || request()->end_date != NULL) {

            // dd(request()->all());

            // $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();

            $url = 'https://support.novita-global.com/';

            $check = ComplaintRegistration::whereBetween('created_at', [$start_date, $end_date])->count();

            // dd($check);

            $export_data =  ComplaintRegistration::select("created_at", "priority", "ticketID", "ticketOld", "status", "name", "email", "phone", "productSerialNo", "productPartNo", "purchaseDate", "warrantyCheck", "channelPurchase", "city", "state", "countries", "address", "pinCode", "issue", "purchaseInvoice")->whereBetween('created_at', [$start_date, $end_date])->get();

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

            foreach ($export_data as $data) {

                $cityname = \App\Models\City::where('id', $data->city)->first();
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
        } else {
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

            foreach ($export_data as $data) {

                $cityname = \App\Models\City::where('id', $data->city)->first();
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
}
