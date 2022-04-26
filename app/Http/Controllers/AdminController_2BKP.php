<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Warranty_registration;
use App\Models\Warranty_extend;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    // Admin Dashboard

    public function adminHome()
    {
        $users = DB::table('users')->count();
        $warranty_registration = DB::table('warranty_registrations')->count();
        $warranty_extend = DB::table('warranty_extends')->count();
        $pieChart = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->orderBy('count')
            ->get();

        $warranty_Registration = Warranty_registration::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $warranty_Extend = Warranty_extend::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $current_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        $before1_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(1))->count();
        $before2_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(2))->count();
        $before3_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(3))->count();
        $before4_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(4))->count();
        $before5_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(5))->count();
        $before6_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(6))->count();
        $before7_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(7))->count();
        $before8_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(8))->count();
        $before9_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(9))->count();
        $before10_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(10))->count();
        $before11_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(11))->count();
        $before12_month_user_warranty_Extend = Warranty_extend::WhereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(12))->count();

        $warranty_Extend_count = array($current_month_user_warranty_Extend, $before1_month_user_warranty_Extend, $before2_month_user_warranty_Extend, $before3_month_user_warranty_Extend, $before4_month_user_warranty_Extend, $before5_month_user_warranty_Extend, $before6_month_user_warranty_Extend, $before7_month_user_warranty_Extend, $before8_month_user_warranty_Extend, $before9_month_user_warranty_Extend, $before10_month_user_warranty_Extend, $before11_month_user_warranty_Extend, $before12_month_user_warranty_Extend);

        return view('admin.adminHome', compact('users', 'warranty_registration', 'warranty_extend', 'pieChart', 'warranty_Registration', 'warranty_Extend', 'warranty_Extend_count'));
    }

    // Product Type Register

    public function productRegistration()
    {
        $product_type = ProductType::all();
        return view('user.product-registration', ['product_type' => $product_type]);
    }

    // public function indexx(Request $request){
    // 	$data['name']=DB::table('product_types')->get();
    // 	return view('user.product-registration',$data);
    // }

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
        $warranty_registration = Warranty_registration::all();
        return view('admin.warranty-registration', ['warranty_registration' => $warranty_registration]);
    }

    // Warranty Extend

    public function warrantyExtend()
    {
        $warranty_extend = Warranty_extend::all();
        return view('admin.warranty-Extend', ['warranty_extend' => $warranty_extend]);
    }

    // All User

    public function user()
    {
        $user = User::all();
        return view('admin.user', ['user' => $user]);
    }

    // Admin Profile

    public function profile()
    {
        return view('admin.adminProfile');
    }

    // Admin Profile Update

    public function adminProfilesave(Request $request)
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

        return redirect()->back()->with("success", "Admin detail is updated !");
    }

    // Admin Password Change

    public function changePasswordSave(Request $request)
    {
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
    }
}
