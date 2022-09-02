<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    // public function index()
    // {
    //     return view('user.home');
    // }

    // public function adminHome()
    // {
    //     return view('admin.adminHome');
    // }


    // public function changePassword()
    // {
    //     return view('user.change-password');
    // }

    // public function profile()
    // {
    //     return view('user.profile');
    // }

    // public function myProduct()
    // {

    //     return view('user.my-product');
    // }

    // public function user()
    // {
    //     $user = User::all();
    //     return view('admin.user',['user'=>$user]);
    // }
}
