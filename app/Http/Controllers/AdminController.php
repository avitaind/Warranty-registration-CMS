<?php

namespace App\Http\Controllers;

use App\Mail\AppMailer;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Warranty_registration;
use App\Models\Warranty_extend;
use App\Models\User;
use App\Models\Certificate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Barryvdh\DomPDF\Facade as PDF;


class AdminController extends Controller
{
    // Admin Dashboard

    public function adminHome()
    {
        try {
            $users = DB::table('users')->count();
            $warranty_registration = DB::table('warranty_registrations')->count();
            $warranty_extend = DB::table('warranty_extends')->count();
            $user = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                ->whereYear('created_at', date('Y'))
                ->groupBy('month_name')
                ->orderBy('count')
                ->get();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.adminHome', compact('users', 'warranty_registration', 'warranty_extend', 'user'));
    }

    // Product Type Register

    public function productRegistration()
    {
        try {
            $product_type = ProductType::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('user.product-registration', ['product_type' => $product_type]);
    }

    // Product Series Register

    public function getproductseries(Request $request)
    {

        $product_types_id = $request->post('producttypeID');
        $productSeries = DB::table('products')->where('product_types_id', $product_types_id)->get();
        // print_r($state);
        $html = '<option value="">Select Product Series</option>';
        foreach ($productSeries as $list) {
            $html .= '<option value="' . $list->id . '">' . $list->name . '</option>';
        }
        echo $html;
    }

    // Product Model Register

    public function getproductmodel(Request $request)
    {
        $products_id = $request->post('productSeriesID');
        $productModel = DB::table('product_models')->where('products_id', $products_id)->get();
        $html = '<option value="">Select Product Model</option>';
        foreach ($productModel as $list) {
            $html .= '<option value="' . $list->id . '">' . $list->model_number . '</option>';
        }
        echo $html;
    }

    // Product Number Register

    public function getproductnumber(Request $request)
    {
        $products_model_id = $request->post('productModelID');
        $productNumber = DB::table('product_numbers')->where('product_model_id', $products_model_id)->get();
        $html = '<option value="">Select Product Number</option>';
        foreach ($productNumber as $list) {
            $html .= '<option value="' . $list->id . '">' . $list->product_number . '</option>';
        }
        echo $html;
    }

    // Product Configuration Register

    public function getproductConfiguration(Request $request)
    {
        $product_model_id = $request->post('productConfigurationID');
        $productConfiguration = DB::table('product_numbers')->where('id', $product_model_id)->get();
        // $productConfiguration = DB::table('product_numbers')->join('product_models','product_models.id', '=', 'product_numbers.product_model_id')->get();

        $html = '';
        foreach ($productConfiguration as $list) {
            $html .= "$list->titleName";
        }
        echo $html;
    }

    // Warranty Register

    public function warrantyRegistration()
    {
        try {
            $product = DB::table('products')->join('product_types', 'product_types.id', '=', 'products.product_types_id')
                ->join('product_models', 'product_models.products_id', '=', 'products.id')
                ->join('product_numbers', 'product_numbers.product_model_id', '=', 'product_models.id')
                ->select('product_types.name as type_name', 'products.name', 'product_models.model_number', 'product_numbers.product_number', 'product_numbers.titleName')->get();
            $warranty_registration = Warranty_registration::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.warranty-registration', ['warranty_registration' => $warranty_registration], ['product' => $product]);
    }

    // Warranty Extend

    public function warrantyExtend()
    {
        try {
            $warranty_extend = Warranty_extend::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.warranty-Extend', ['warranty_extend' => $warranty_extend]);
    }

    //  Certificate Plan

    public function certificateWarranty()
    {
        try {
            $certificate = Certificate::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.certificate.index', ['certificate' => $certificate]);
    }

    // Certificate Create

    public function certificateCreate()
    {
        try {
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.certificate.create');
    }

    // Certificate Create

    public function certificateStore(Request $request)
    {
        try {
            // dd($request->all());

            $this->validate($request, [
                'name'                    => 'required',
                'email'                   => 'required',
                'phone'                   => 'required|digits:10|numeric',
                'serial_number'           => 'required',
                'product_number'          => 'required',
                'product_configuration'   => 'required',
                'reseller_name'           => 'required',
                'purchase_date'           => 'required',
                'extend_date'             => 'required',
            ]);

            $form = Certificate::create([
                'name'                    => $request->name,
                'email'                   => $request->email,
                'phone'                   => $request->phone,
                'serial_number'           => $request->serial_number,
                'product_number'          => $request->product_number,
                'product_configuration'   => $request->product_configuration,
                'reseller_name'           => $request->reseller_name,
                'purchase_date'           => $request->purchase_date,
                'extend_date'             => $request->extend_date,
            ]);

            // dd($form);

            $form->save();

            return redirect()->back()->with("success", "Certificate detail is updated !");
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->back()->with("error", "Something is wrong !");
    }

    // // Certificate Download PDF

    public function certificatedownloadPDF($id)
    {
        try {
            $certificate = Certificate::find($id);
            // $pdf = PDF::loadView('admin.pdf', ['certificate' => $certificate])->setPaper('a4', 'portrait');
            $pdf = PDF::loadView('admin.pdf', ['certificate' => $certificate])->setPaper('a4', 'landscape');

            $fileName = $certificate->name;
            return $pdf->stream($fileName . '.pdf');
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return $pdf->download('invoice.pdf');
    }

    // Certificate Mail

    public function certificateMail(Request $request, AppMailer $mailer, $id)
    {
        $certificate = Certificate::find($id);

        $mailer->sendCertificateInformation(Auth::user(), $certificate, $certificate->email);
        return redirect()->back()->with("success", "Warranty Certificate $certificate->name Mail Successfully.");
    }

    // All User

    public function user()
    {
        try {
            $user = User::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.user', ['user' => $user]);
    }

    // Admin Profile

    public function profile()
    {
        try {
            $users = User::where('id', Auth::user()->id)->first();
            // dd($users);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.adminProfile', compact('users'));
    }

    // Admin Profile Update

    public function adminProfilesave(Request $request)
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
                    $fileName = $file->move(date('d-m-Y') . '-Admin-User', $image);
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
                "pic"           => $picture
            ]);

            return redirect()->back()->with("success", "Admin detail is updated !");
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }

    // Admin Password Change

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
            return redirect()->back()->with("changePassword", "Password changed successfully !");
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }
}
