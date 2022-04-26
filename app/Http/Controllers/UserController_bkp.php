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

    public function productRegistration(Request $request, User $user)
    {
        $user_id = $request->user()->id;
        $user_record = User::where('id', $user_id)->first();
        $user_name = $user_record->name;
        $user_email = $user_record->email;
        $user_phone = $user_record->phone;
        $product_type = product_type::all();
        // dd(Auth::user());
        return view('user.product-registration', ['product_type' => $product_type, 'user_name' => $user_name, 'user_email' => $user_email, 'user_phone' => $user_phone]);
    }

    public function productRegistrationStore(Request $request)
    {
        // dd($request->all());
        $post = new Warranty_registration;
        $post->product_type            = $request->product_type;
        $post->product_Series          = $request->product_series;
        $post->product_model           = $request->product_model;
        $post->product_number          = $request->product_number;
        $post->product_configuration   = $request->product_configuration;
        $post->serial_number           = $request->serial_number;
        $post->reseller_name           = $request->reseller_name;
        $post->purchase_date           = $request->purchase_date;
        $post->user_name               = $request->user_name;
        $post->user_email              = $request->user_email;
        $post->user_phone              = $request->user_phone;

        $result = $post->save();

        if ($result) {
            return redirect()->back()->with("success", "Product Detail is updated !");
        } else {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }

    public function productExtend(Request $request, User $user)
    {
        $user_id = $request->user()->id;
        $user_record = User::where('id', $user_id)->first();
        $user_name = $user_record->name;
        $user_email = $user_record->email;
        $user_phone = $user_record->phone;
        $product_type = product_type::all();
        // dd(Auth::user());
        return view('user.product-extend', ['product_type' => $product_type, 'user_name' => $user_name, 'user_email' => $user_email, 'user_phone' => $user_phone]);
    }

    public function getpurchaseCodeID(Request $request)
    {
        $purch_code = $request->post('purchaseCodeID');

        $codes = WarrantyCode::where('code', $purch_code)->get();
        // dd($codes);


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


    public function productExtendStore(Request $request, AppMailer $mailer)
    {
        // dd($request->all());

        $picture = "";
        $imageNameArr = [];
        $this->validate($request, [
            'purchase_invoice.*' => 'mimes:jpg,jpeg,png,pdf,xlsx,xlx,ppt,pptx,csv,zip|max:307200',
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
        $extend->product_Series          = $request->product_series;
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

        $getdata = \App\Models\Warranty_extend::latest()->first();

        if ($getdata->purchase_code == $request->purchase_code) {

            return redirect()->back()->with("error", "Product Code is Already Registration.");
        } else {
            // dd($getdata);
            $result = $extend->save();
        }


        $mailer->sendWarrantyExtendInformation(Auth::user(), $getdata);

        if ($result) {
            return redirect()->back()->with("success", "Product Warranty Extend is updated !");
        } else {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }

    public function productExtendStores(Request $request, AppMailer $mailer)
    {

        try {
            // dd($request->all());
            $picture = "";
            $imageNameArr = [];
            $this->validate($request, [
                'product_type'              => 'required',
                'product_Series'            => 'required',
                'product_model'             => 'required',
                'product_number'            => 'required',
                'product_configuration'     => 'required',
                'serial_number'             => 'required',
                'reseller_name'             => 'required',
                'user_name'                 => 'required',
                'user_email'                => 'required',
                'user_phone'                => 'required',
                'purchase_code'             => 'required',
                'purchase_invoice.*'        => 'mimes:jpg,jpeg,png,pdf,xlsx,xlx,ppt,pptx,csv,zip|max:307200',
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
            $extend->product_Series          = $request->product_series;
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

            $getdata = \App\Models\Warranty_extend::latest()->first();

            if ($getdata->purchase_code == $request->purchase_code) {

                return redirect()->back()->with("error", "Product Code is Already Registration.");
            } else {
                // dd($getdata);
                $result = $extend->save();
            }

            // $mailer->sendWarrantyExtendInformation(Auth::user(), $getdata);

            return redirect()->back()->with("success", "Product Warranty Extend is updated !");
        } catch (\Exception $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }


    public function myProduct(Request $request)
    // {
    //     $prowarnty = Warranty_registration::where('user_email', $request->user()->email)->get();
    //     return view('user.my-product', compact('request', 'prowarnty'));
    // }
    {
        try {
            $prowarnty = Warranty_registration::where('user_email', $request->user()->email)->get();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('user.my-product', compact('request', 'prowarnty'));
    }

    public function changePassword()
    {
        return view('user.change-password');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function index()
    {
        return view('user.home');
    }

    public function contactUS()
    {
        return view('user.contact');
    }


    public function create()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function profilesave(Request $request)
    {
        // dd($request->all());
        User::where('id', $request->user_id)->update([
            'last_name' => $request->last_name,
            "phone" => $request->phone,
            "address" => $request->address,
            "gender" => $request->gender,
            "postcode" => $request->postcode,
            "country" => $request->country,
            "state" => $request->state

        ]);

        return redirect()->back()->with("success", "User detail is updated !");
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function changePasswordSave(Request $request)
    // {
    //     // dd($request->all());
    //     if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
    //         // The passwords matches
    //         return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
    //     }
    //     if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
    //         //Current password and new password are same
    //         return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
    //     }
    //     $validator = Validator::make($request->all(), [
    //         'current_password' => 'required',
    //         'new_password' => ['required|min:6'],
    //         #'confirm_password' => ['same:new_password'],
    //     ]);
    //     //Change Password
    //     $user = Auth::user();
    //     $user->password = bcrypt($request->get('new_password'));
    //     $user->save();
    //     return redirect()->back()->with("success", "Password changed successfully !");
    // }
    {
        dd($request->all());
        try {
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
}
