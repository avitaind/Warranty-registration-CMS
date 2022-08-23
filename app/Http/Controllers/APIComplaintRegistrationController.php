<?php

namespace App\Http\Controllers;

use App\Models\ComplaintRegistration;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;

class APIComplaintRegistrationController extends Controller
{
    // Get All && Search

    public function index(Request $request)
    {
        if (strlen($request->city) > 0) {
            //$result =APIServiceCenter::select('city', 'state', 'pin','address','opening_hour')->Where('city','like','%'. $request->city . '%')->get();
            $result = ComplaintRegistration::select(
                'ticketID',
                'name',
                'email',
                'phone',
                'productSerialNo',
                'productPartNo',
                'purchaseDate',
                'warrantyCheck',
                'chanalPurchase',
                'city',
                'state',
                'pinCode',
                'issue',
                'purchaseInvoice',
                'status'
            )->Where('city', $request->city)->get();
            // dd(count($result)==0);
            // dd($result=='NULL');
            if (count($result) == 0) {
                return ["result" => "No data found"];
            }
        }
        // else{
        //     $result = APIServiceCenter::get();
        // }
        elseif (strlen($request->state) > 0) {
            $result = ComplaintRegistration::select(
                'ticketID',
                'name',
                'email',
                'phone',
                'productSerialNo',
                'productPartNo',
                'purchaseDate',
                'warrantyCheck',
                'chanalPurchase',
                'city',
                'state',
                'pinCode',
                'issue',
                'purchaseInvoice',
                'status'
            )->Where('state', $request->state)->get();
            // $result =APIServiceCenter::Where('city','like','%'. $request->state . '%')->get();
            if (count($result) == 0) {
                return ["result" => "No data found"];
            }
        }
        // else{
        //     $result = APIServiceCenter::get();
        // }
        elseif (strlen($request->pinCode) > 0) {
            $result = ComplaintRegistration::select(
                'ticketID',
                'name',
                'email',
                'phone',
                'productSerialNo',
                'productPartNo',
                'purchaseDate',
                'warrantyCheck',
                'chanalPurchase',
                'city',
                'state',
                'pinCode',
                'issue',
                'purchaseInvoice',
                'status'
            )->Where('pinCode', $request->pinCode)->get();
            // $result =APIServiceCenter::Where('pin','like','%'. $request->pin . '%')->get();
            if (count($result) == 0) {
                return ["result" => "No data found"];
            }
        } elseif (strlen($request->productSerialNo) > 0) {
            $result = ComplaintRegistration::select(
                'ticketID',
                'name',
                'email',
                'phone',
                'productSerialNo',
                'productPartNo',
                'purchaseDate',
                'warrantyCheck',
                'chanalPurchase',
                'city',
                'state',
                'pinCode',
                'issue',
                'purchaseInvoice',
                'status'
            )->Where('productSerialNo', $request->productSerialNo)->get();
            if (count($result) == 0) {
                return ["result" => "No data found"];
            }
        } else {
            $fetchdata = ComplaintRegistration::get();

            $url = 'https://support.novita-india.com/';

            $data_array = array();

            foreach ($fetchdata as $data) {

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
                    // 'city'              => $cityname->name,
                    'city'              => json_decode(json_encode($cityname)),
                    // 'state'             => $statename->name,
                    'state'             => json_decode(json_encode($statename)),
                    // 'countries'         => $countryname->name,
                    'countries'         => json_decode(json_encode($countryname)),
                    'address'           => $data->address,
                    'pinCode'           => $data->pinCode,
                    'issue'             => $data->issue,
                    'purchaseInvoice'   => $url . $data->purchaseInvoice,
                );
            }
        }
        return collect($data_array);
    }



    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $picture = "";
            // $pic = "";
            $imageNameArr = [];
            $checkdata = ComplaintRegistration::latest()->first();
            // dd($checkdata);

            if (isset($checkdata) && $checkdata) {
                $incid = $checkdata->id + 1;
                $num_padded = sprintf("%03d", $incid);
                $ticketID = "NOVITA ID-" . $num_padded;
                // dd($ticketID);
            } else {
                $incid = 1;
                $num_padded = sprintf("%03d", $incid);
                $ticketID = "NOVITA ID-" . $num_padded;
                // dd($ticketID);
            }

            $rules = array(
                'name'                 => 'required',
                // 'status'               => 'required',
                'email'                => 'required',
                'phone'                => 'required|numeric|min:10',
                'productSerialNo'      => 'required|regex:/^[a-zA-Z0-9]+$/',
                'productPartNo'        => 'required|regex:/^[a-zA-Z0-9-]+$/',
                'purchaseDate'         => 'required',
                'warrantyCheck'        => 'required',
                'channelPurchase'      => 'required',
                'city'                 => 'required',
                'countries'            => 'required',
                'state'                => 'required',
                'pinCode'              => 'required|regex:/^(?:\d{6})$/i',
                'issue'                => 'required',
                // 'ticketID'             => 'required',
                // 'purchaseInvoice'      => 'required',
                'purchaseInvoice'      => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
            );

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return $validator->errors();
            } else {

                if ($request->hasFile('purchaseInvoice')) {
                    $picture = array();
                    $imageNameArr = [];
                    // foreach ($request->purchaseInvoice as $file) {
                    // you can also use the original name
                    $file = $request->purchaseInvoice;
                    $image = $file->getClientOriginalName();
                    $imageNameArr[] = $image;
                    // Upload file to public path in images directory
                    $fileName = $file->move(date('d-m-Y') . '-Complaint-Registration', $image);
                    // Database operation
                    $array[] = $fileName;
                    $picture = implode(",", $array); //Image separated by comma
                    // dd($picture);

                    // dd($picture);
                    // }
                }

                $productExist = \App\Models\product_number::where('product_number', $request->productPartNo)->first();

                if (!isset($productExist)) {
                    return ["result" => "Something is wrong in Product Number $request->productPartNo !!"];
                }

                $allserialnumber = explode(',', $productExist['serial_number']);
                $resultant = false;
                foreach ($allserialnumber as $key => $data) {
                    if ($data == $request->productSerialNo) {
                        $resultant = true;
                    }
                }
                // dd($city_name);
                $cityname = \App\Models\City::where('name', 'like', '%' . $request->city . '%')->first();

                if ($cityname == NULL) {
                    return ["result" => "City is not Match in data!"];
                }
                // dd(ucfirst($request->state));
                $statename = \App\Models\State::where('name', 'like', '%' . $request->state . '%')->first();

                if ($statename == NULL) {
                    return ["result" => "State is not Match in data!"];
                }

                $countryname = \App\Models\Country::where('name', 'like', '%' . $request->countries . '%')->first();
                // dd($request->countries,$countryname);
                if ($countryname == NULL) {
                    return ["result" => "Country is not Match in data!"];
                }

                if ($resultant == true) {
                    // dd($picture);
                    $complRegis                    = new ComplaintRegistration();
                    $complRegis->name              = $request->name;
                    $complRegis->email             = $request->email;
                    $complRegis->phone             = $request->phone;
                    $complRegis->status            = 'Pending For Review';
                    $complRegis->productSerialNo   = $request->productSerialNo;
                    $complRegis->productPartNo     = $request->productPartNo;
                    $complRegis->purchaseDate      = $request->purchaseDate;
                    $complRegis->warrantyCheck     = $request->warrantyCheck;
                    $complRegis->channelPurchase   = $request->channelPurchase;
                    $complRegis->city              = $cityname->id;
                    // $complRegis->city              = $request->city;
                    $complRegis->state             = $statename->id;
                    // $complRegis->state             = $request->state;
                    $complRegis->pinCode           = $request->pinCode;
                    $complRegis->issue             = $request->issue;
                    $complRegis->countries         = $countryname->id;
                    // $complRegis->countries         = $request->countries;
                    $complRegis->address           = $request->address;
                    $complRegis->purchaseInvoice   = $picture;
                    $complRegis->ticketID          = $ticketID;
                    $complRegis->ticketOld         = $request->ticketOld;

                    // if (request()->file('purchaseInvoice') != '') {
                    //     $purchaseInvoice = request()->file('purchaseInvoice');
                    //     $purchaseInvoice_name = time() . '.' . $request->purchaseInvoice->getClientOriginalName();
                    //     $purchaseInvoice->storeAs("API-Complaint-Registration/", $purchaseInvoice_name);
                    //     $complRegis->purchaseInvoice = "API-Complaint-Registration/" . $purchaseInvoice_name;
                    // }

                    // $complRegis->status            = $request->status;
                    // $complRegis->purchaseInvoice   = $pic;

                    if ($request->purchaseInvoice == NULL) {
                        return ["result" => "The purchase invoice field is required...!!!"];
                    }

                    // dd($complRegis);

                    $getdata = \App\Models\ComplaintRegistration::where('productSerialNo', $request->productSerialNo)->count();

                    if ($getdata > 0) {
                        return ["result" => "Complaint is Already Registered"];
                    } else {
                        $mailCheck = \App\Models\ComplaintRegistration::where('email', $request->email)->count();

                        // if ($mailCheck > 0) {
                        //     return ["result" => "Mail ID is Already Take"];
                        // }

                        $phoneCheck = \App\Models\ComplaintRegistration::where('phone', $request->phone)->count();

                        // if ($phoneCheck > 0) {
                        //     return ["result" => "Phone No. is Already Take"];
                        // }
                        $result = $complRegis->save();
                    }
                    if ($result) {
                        return ["result" => "Product is Registered Now Your complaint id : $ticketID is registered with us. We will update you shortly."];
                    }
                } else {
                    return ["result" => "Something is wrong Serial Number  $request->productSerialNo !!"];
                }
            }
        } catch (ModelNotFoundException $exception) {
            return ["result" => "Something is wrong...! "];
        }
    }
}
