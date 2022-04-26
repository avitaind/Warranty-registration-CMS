<?php

namespace App\Http\Controllers;

use App\Mail\AppMailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\product_type;
use App\Models\User;
use App\Models\Warranty_extend;
use App\Models\Warranty_registration;
use App\Models\WarrantyCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // User Dashboard

    public function index()
    {
        return view('user.home');
    }

    // My Product

    public function myProduct(Request $request)
    {
        try {
            $prowarnty = Warranty_registration::where('user_email', $request->user()->email)->get();
            // dd($prowarnty);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('user.my-product', compact('request', 'prowarnty'));
    }

    //  Product Registration Create

    public function productRegistration(Request $request, User $user)
    {
        try {
            // dd(Auth::user());
            $user_id = $request->user()->id;
            $user_record = User::where('id', $user_id)->first();
            $user_name = $user_record->name;
            $user_email = $user_record->email;
            $user_phone = $user_record->phone;
            $product_type = product_type::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('user.product-registration', ['product_type' => $product_type, 'user_name' => $user_name, 'user_email' => $user_email, 'user_phone' => $user_phone]);
    }

    //  Product Registration Store

    public function productRegistrationStore(Request $request)
    {
        try {
            // dd($request->all());
            $this->validate($request, [
                'user_name'                 => 'required',
                'user_email'                => 'required',
                'user_phone'                => 'required',
                'product_type'              => 'required',
                'product_Series'            => 'required',
                'product_model'             => 'required',
                'product_number'            => 'required',
                'product_configuration'     => 'required',
                'serial_number'             => 'required',
                'reseller_name'             => 'required',
                'purchase_date'             => 'required',
            ]);

            $productRegister = new Warranty_registration;;
            $productRegister->product_type            = $request->product_type;
            $productRegister->product_Series          = $request->product_Series;
            $productRegister->product_model           = $request->product_model;
            $productRegister->product_number          = $request->product_number;
            $productRegister->product_configuration   = $request->product_configuration;
            $productRegister->serial_number           = $request->serial_number;
            $productRegister->reseller_name           = $request->reseller_name;
            $productRegister->purchase_date           = $request->purchase_date;
            $productRegister->user_name               = $request->user_name;
            $productRegister->user_email              = $request->user_email;
            $productRegister->user_phone              = $request->user_phone;

            // dd($productRegister);

            $getdata = \App\Models\Warranty_registration::latest()->first();

            // dd($getdata->serial_number);

            if ($getdata == '') {
                # code...
                $result = $productRegister->save();
            } elseif ($getdata->serial_number == $request->serial_number) {
                # code...
                return redirect()->back()->with("error", "Product is Already Registration.");
            } else {
                # code...
                $result = $productRegister->save();
            }


            // if ($getdata->serial_number == $request->serial_number) {

            //     return redirect()->back()->with("error", "Product is Already Registration.");
            // } else {
            //     // dd($getdata);
            //     $result = $productRegister->save();
            // }

            //  Test Only Unhide

            // $result = $productRegister->save();

            if ($result) {
                return redirect()->back()->with("success", "Product Detail is updated !");
            }
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }

    //  Product Extend Create

    public function productExtend(Request $request, User $user)
    {
        try {
            $user_id = $request->user()->id;
            $user_record = User::where('id', $user_id)->first();
            $user_name = $user_record->name;
            $user_email = $user_record->email;
            $user_phone = $user_record->phone;
            $product_type = product_type::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('user.product-extend', ['product_type' => $product_type, 'user_name' => $user_name, 'user_email' => $user_email, 'user_phone' => $user_phone]);
    }

    public function getpurchaseCodeID(Request $request)
    {
        $purch_code = $request->post('purchaseCodeID');

        $codes = WarrantyCode::where('code', $purch_code)->get();
        // dd($codes);

        $html = '';

        foreach ($codes as $list) {
            $html .= "$list->code";
        }

        if ($codes == $purch_code) {
            # code...
            // echo $codes.'   No';
            echo $html;
        } else {
            # code...
            // echo $codes.'   Yes';
            // dd($html);
            echo $html . 'No';
        }

        // echo $html;
    }

    //  Product Extend Store

    public function productExtendStore(Request $request, AppMailer $mailer)
    {
        try {
            // dd($request->all());
            $picture = "";
            $imageNameArr = [];
            $this->validate($request, [
                'user_name'                 => 'required',
                'user_email'                => 'required',
                'user_phone'                => 'required',
                'product_type'              => 'required',
                'product_Series'            => 'required',
                'product_model'             => 'required',
                'product_number'            => 'required',
                'product_configuration'     => 'required',
                'serial_number'             => 'required',
                'reseller_name'             => 'required',
                'purchase_date'             => 'required',
                'purchase_code'             => 'required',
                'purchase_invoice'          => 'required',
            ]);

            if ($request->hasFile('purchase_invoice')) {
                $picture = array();
                $imageNameArr = [];
                foreach ($request->purchase_invoice as $file) {
                    // you can also use the original name
                    $image = $file->getClientOriginalName();
                    $imageNameArr[] = $image;
                    // Upload file to public path in images directory
                    $fileName = $file->move(date('d-m-Y') . '-Warranty-Extend', $image);
                    // Database operation
                    $array[] = $fileName;
                    $picture = implode(",", $array); //Image separated by comma
                }
            }

            $extend = new Warranty_extend;
            $extend->product_type            = $request->product_type;
            $extend->product_Series          = $request->product_Series;
            $extend->product_model           = $request->product_model;
            $extend->product_number          = $request->product_number;
            $extend->product_configuration   = $request->product_configuration;
            $extend->serial_number           = $request->serial_number;
            $extend->reseller_name           = $request->reseller_name;
            $extend->purchase_date           = $request->purchase_date;
            $extend->user_name               = $request->user_name;
            $extend->user_email              = $request->user_email;
            $extend->user_phone              = $request->user_phone;
            $extend->purchase_code           = $request->purchase_code;
            $extend->purchase_invoice        = $picture;

            // dd($extend);


            $getdata = \App\Models\Warranty_extend::latest()->first();

            // dd($getdata);

            if ($getdata == '') {
                # code...
                $result = $extend->save();
            } elseif ($getdata->purchase_code == $request->purchase_code) {
                # code...
                return redirect()->back()->with("error", "Product Code is Already Registration.");
            } else {
                $result = $extend->save();
            }


            // if ($getdata->purchase_code == $request->purchase_code && '') {

            //     dd($request->purchase_code);

            //     return redirect()->back()->with("error", "Product Code is Already Registration.");
            // } else {
            //     // dd($getdata);
            //     $result = $extend->save();
            // }

            // Test Only unhide

            // $result = $extend->save();

            // Mail

            // $mailer->sendWarrantyExtendInformation(Auth::user(), $extend);

            if ($result) {
                return redirect()->back()->with("success", "Product Warranty Extend is updated !");
            }
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }

    // User Password Change

    public function changePassword()
    {
        return view('user.change-password');
    }

    // User Password Store

    public function changePasswordSave(Request $request)
    {
        // dd($request->all());
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

    // User Profile Page

    public function profile()
    {
        try {
            //code...
            // $user = User::get()->first();
            $user = User::where('id', Auth::user()->id)->get()->first();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('user.profile', compact('user'));
    }

    // User Profile Save

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
                'pic'              => 'required',
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

    // User Contact Page

    public function contactUS()
    {
        return view('user.contact');
    }
}
