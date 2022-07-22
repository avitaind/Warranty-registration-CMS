<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\product_type;
use App\Models\Sales;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;



class SellerController extends Controller
{
    public function sellerHome()
    {
        return view('seller.sellerHome');
    }

    // User Seller Page

    public function profile()
    {
        try {
            //code...
            // $user = User::get()->first();
            $user = User::where('id', Auth::user()->id)->get()->first();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('seller.profile', compact('user'));
    }

    // Seller Profile Save

    public function profilesave(Request $request)
    {
        try {
            // dd($request->all());

            $picture = "";
            $imageNameArr = [];

            $this->validate($request, [
                'last_name'        => 'required',
                'phone'            => 'required',
                'address'          => 'required',
                'gender'           => 'required',
                'postcode'         => 'required',
                'country'          => 'required',
                'state'            => 'required',
                // 'pic'              => 'required',
            ]);

            if ($request->hasFile('pic')) {
                $picture = array();
                $imageNameArr = [];
                foreach ($request->pic as $file) {
                    // you can also use the original name
                    $image = $file->getClientOriginalName();
                    $imageNameArr[] = $image;
                    // Upload file to public path in images directory
                    $fileName = $file->move(date('d-m-Y') . '-User', $image);
                    // Database operation
                    $array[] = $fileName;
                    $picture = implode(",", $array); //Image separated by comma
                }
            }

            User::where('id', $request->user_id)->update([
                'last_name'     => $request->last_name,
                "phone"         => $request->phone,
                "address"       => $request->address,
                "gender"        => $request->gender,
                "postcode"      => $request->postcode,
                "country"       => $request->country,
                "state"         => $request->state,
                "pic"           => $picture,
            ]);

            return redirect()->back()->with("usersuccess", "User detail is updated !");
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }

    // Seller Password Change

    public function changePassword()
    {
        return view('seller.change-password');
    }

    // Seller Password Store

    public function changePasswordSave(Request $request)
    {
        //   dd($request->all());
        try {
            $this->validate($request, [
                'current_password'        => 'required',
                'new_password'            => 'required',
            ]);
            // dd($request->all());
            if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
            }
            if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
                //Current password and new password are same
                return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
            }
            $validator = Validator::make($request->all(), [
                'current_password' => 'required',
                'new_password' => ['required|min:6'],
                #'confirm_password' => ['same:new_password'],
            ]);
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new_password'));
            $user->save();
            return redirect()->back()->with("success", "Password changed successfully !");
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }

    //   Seller sales Details

    public function sales(Request $request)
    {
        try {
            $sale = Sales::where('user_id', Auth::user()->id)->get();
            // dd($sale);
            // $user_record = Sales::where('user_id', Auth::user()->id)->first();
            // dd($user_record);
            // $productNumber = $user_record->productNumber;
            // dd($productNumber);
            // $countSales = Sales::where('user_id', Auth::user()->id)->orwhere('productNumber', $productNumber)->count();
            // dd($countSales);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('seller.sales', ['sale' => $sale]);
    }

    // Seller InSales Details

    public function InSales(Request $request)
    {
        try {
            $user_id = $request->user()->id;
            // dd($user_id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('seller.salesIn', ['user_id' => $user_id]);
    }

    // Seller InSales Details Save

    public function InSalesSave(Request $request)
    {
        // dd($request->productNumber);

        $serial_Number = \App\Models\product_number::where('product_number', $request->productNumber)->first();

        // dd($serial_Number);

        $result = '';
        if (isset($serial_Number)) {
            $serialnoarr[] = explode(',', $serial_Number->serial_number);
            $result = in_array($request->serialNumber, $serialnoarr[0]);

            // if (in_array($request->serialNumber, $serialnoarr[0]) == false) {
            //     // dd(true);
            //     $form = DB::statement("update `sales` set serialNumber=concat(serialNumber,'," . $request->serialNumber . "') where `productNumber` = '" . $request->productNumber . "' ");

            //     return Redirect::back()->with('msg', 'Update Serial number');
            // } else {
            //     return Redirect::back()->with('warning', 'Serial number is already exist.');
            // }
        }
        //  dd($request->all());
        dd($result);


        if ($result == false) {
            $this->validate($request, [
                'user_id'                  => 'required',
                'productNumber'            => 'required',
                'serialNumber'             => 'required',
                'productConfiguration'     => 'required',
                'color'                    => 'required',
                'screenSize'               => 'required',
                'saleDate'                 => 'required',
                // 'purchaseInvoice'          => 'required',
                'purchaseInvoice.*'          => 'mimes:png,jpg,jpeg,pdf|max:2048',
            ]);
            return redirect()->back()->with("error", "Serial Number is wrong !");
        }

        try {
            // dd($request->all());
            $picture = "";
            $imageNameArr = [];
            $this->validate($request, [
                'user_id'                  => 'required',
                'productNumber'            => 'required',
                'serialNumber'             => 'required',
                'productConfiguration'     => 'required',
                'color'                    => 'required',
                'screenSize'               => 'required',
                'saleDate'                 => 'required',
                // 'purchaseInvoice'          => 'required',
                'purchaseInvoice.*'          => 'mimes:png,jpg,jpeg,pdf|max:2048',
            ]);


            if ($request->hasFile('purchaseInvoice')) {
                $picture = array();
                $imageNameArr = [];
                foreach ($request->purchaseInvoice as $file) {
                    // you can also use the original name
                    $image = $file->getClientOriginalName();
                    $imageNameArr[] = $image;
                    // Upload file to public path in images directory
                    $fileName = $file->move(date('d-m-Y') . '-In-Sales', $image);
                    // Database operation
                    $array[] = $fileName;
                    $picture = implode(",", $array); //Image separated by comma
                }
            }

            $inSales = new Sales;
            $inSales->user_id                = $request->user_id;
            $inSales->productNumber          = $request->productNumber;
            $inSales->serialNumber           = $request->serialNumber;
            $inSales->productConfiguration   = $request->productConfiguration;
            $inSales->color                  = $request->color;
            $inSales->screenSize             = $request->screenSize;
            $inSales->saleDate               = $request->saleDate;
            $inSales->purchaseInvoice        = $picture;

            // dd($inSales);

            $getdata = \App\Models\Sales::where('serialNumber', $request->serialNumber)->count();
            // dd($getdata);

            if ($getdata > 0) {
                # code...
                return redirect()->back()->with("error", "Product is Already Registration.");
            } else {
                # code...
                // dd($result);
                $result = $inSales->save();
            }
            if ($result) {
                return redirect()->back()->with("success", "Product Detail is updated !");
            }
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }

    // Seller OutSales Detailsl

    public function OutSales(Request $request)
    {
        try {
            $user_id = $request->user()->id;
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('seller.salesOut', ['user_id' => $user_id]);
    }

    // Seller OutSales Details Save

    public function OutSalesSave(Request $request)
    {
        // dd($request->all());

        $serial_Number = \App\Models\product_number::where('product_number', $request->productNumber)->first();

        // dd($serial_Number);

        $result = '';
        if (isset($serial_Number)) {
            $serialnoarr[] = explode(',', $serial_Number->serial_number);
            $result = in_array($request->serialNumber, $serialnoarr[0]);
        }

        dd($result);


        if ($result == false) {
            $this->validate($request, [
                'productNumber'            => 'required',
                'serialNumber'             => 'required',
                'productConfiguration'     => 'required',
                'color'                    => 'required',
                'screenSize'               => 'required',
                'saleDate'                 => 'required',
                'purchaseInvoice.*'        => 'mimes:png,jpg,jpeg,pdf|max:2048',
            ]);
            return redirect()->back()->with("error", "Serial Number is wrong !");
        }

        try {
            $picture = "";
            $imageNameArr = [];
            $this->validate($request, [
                'productNumber'            => 'required',
                'serialNumber'             => 'required',
                'productConfiguration'     => 'required',
                'color'                    => 'required',
                'screenSize'               => 'required',
                'saleDate'                 => 'required',
                'purchaseInvoice.*'        => 'mimes:png,jpg,jpeg,pdf|max:2048',
            ]);

            if ($request->hasFile('purchaseInvoice')) {
                $picture = array();
                $imageNameArr = [];
                foreach ($request->purchaseInvoice as $file) {
                    // you can also use the original name
                    $image = $file->getClientOriginalName();
                    $imageNameArr[] = $image;
                    // Upload file to public path in images directory
                    $fileName = $file->move(date('d-m-Y') . '-Out-Sales', $image);
                    // Database operation
                    $array[] = $fileName;
                    $picture = implode(",", $array); //Image separated by comma
                }
            }

            $inSales = new Sales;
            $inSales->productNumber          = $request->productNumber;
            $inSales->serialNumber           = $request->serialNumber;
            $inSales->productConfiguration   = $request->productConfiguration;
            $inSales->color                  = $request->color;
            $inSales->screenSize             = $request->screenSize;
            $inSales->saleDate               = $request->saleDate;
            $inSales->purchaseInvoice        = $picture;

            dd($inSales);


            $getdata = \App\Models\Sales::where('serialNumber', $request->serialNumber)->count();
            // dd($getdata);

            if ($getdata > 0) {
                # code...
                return redirect()->back()->with("error", "Product is Already Registration.");
            } else {
                # code...
                $result = $inSales->save();
            }
            if ($result) {
                return redirect()->back()->with("success", "Product Detail is updated !");
            }
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }
}
