<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::group(['middleware' => 'PreventBackHistory'], function () {
});


// User

Route::group(['prefix' => 'customer', 'middleware' => ['auth', 'PreventBackHistory']], function () {

    // Dashboard

    // Route::get('/', [UserController::class, 'index']);
    // Route::get('customer', [UserController::class, 'index'])->name('home');

    // Profile

    // Route::get('/', [UserController::class, 'profile']);
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('profile/profilesave', [UserController::class, 'profilesave'])->name('profilesave');

    // Password Change

    Route::get('password-change', [UserController::class, 'changePassword'])->name('change-password');
    Route::post('password-change/store', [UserController::class, 'changePasswordSave'])->name('user.changePassword');

    // Register Product

    Route::get('my-product', [UserController::class, 'myProduct'])->name('my-product');

    // Product Registration

    Route::get('product-registration', [UserController::class, 'productRegistration'])->name('product-registration');
    Route::post('product-registration/store', [UserController::class, 'productRegistrationStore'])->name('productRegistrationStore.store');

    // Product Extend

    Route::get('product-extend', [UserController::class, 'productExtend'])->name('product-extend');
    Route::post('product-extend/store', [UserController::class, 'productExtendStore'])->name('productExtendStore.store');
    Route::get('product-extend/search', [UserController::class, 'productExtendStore']);

    // test

    // Route::post('user/product-extend/store', [UserController::class, 'productExtendStores'])->name('productExtendStores.store');

    // ContactUS

    Route::get('contactUS', [UserController::class, 'contactUS'])->name('contactus');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'PreventBackHistory']], function () {
    // Admin
    Route::get('/', [AdminController::class, 'adminHome'])->name('admin.home');



    // Admin Profile
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');

    // Admin Profile Update
    Route::post('profile/profilesave', [AdminController::class, 'adminProfilesave'])->name('admin.profilesave');

    // Admin Password Change
    Route::post('changePassword', [AdminController::class, 'changePasswordSave'])->name('changePassword');

    // All User
    Route::get('customers', [AdminController::class, 'user'])->name('user');

    // All Warranty Registration
    Route::get('warranty-registration', [AdminController::class, 'warrantyRegistration'])->name('warranty-registration');

    // All Warranty Registration
    Route::get('warranty-extend', [AdminController::class, 'warrantyExtend'])->name('warranty-extend');

    // All Warranty Certificate
    // Route::get('certificate', [AdminController::class, 'certificateWarranty'])->name('certificate');
    Route::get('certificate', 'AdminController@certificateWarranty')->name('certificate');

    // All Warranty Certificate
    Route::get('certificate/create', [AdminController::class, 'certificateCreate'])->name('certificate.create');
    Route::post('certificate/store', [AdminController::class, 'certificateStore'])->name('certificate.store');

    Route::get('certificate/DownloadPDF/{id}', [AdminController::class, 'certificatedownloadPDF'])->name('downloadPDF');
    Route::get('certificate/certificateMail/{id}', [AdminController::class, 'certificateMail'])->name('certificateMail');


    // Product CURD

    // Route::resource('products', App\Http\Controllers\App\Http\Controllers\ProductController::class);

    // Product All

    Route::get('products/', [ProductController::class, 'index'])->name('products.index');

    // Product Create
    Route::get('products/create/', [ProductController::class, 'create'])->name('products.create');

    // Product Type Create
    Route::get('products/create/product-type', [ProductController::class, 'createproductTypes'])->name('product.add');

    // Product Type store
    Route::post('products/create/product-type/store', [ProductController::class, 'productTypestore'])->name('product.store');

    // Product Series Create
    Route::get('products/create/series', [ProductController::class, 'productSeries'])->name('create.series');

    // Product Series Store
    Route::post('products/create/series/store', [ProductController::class, 'productSeriesstore'])->name('series.store');

    // Product Model Create
    Route::get('products/create/model', [ProductController::class, 'productModelsCreate'])->name('create.model');

    // Product Model Store
    Route::post('products/create/model/store', [ProductController::class, 'productModelsStore'])->name('model.store');

    // Product Number Create
    Route::get('products/create/number', [ProductController::class, 'productNumberCreate'])->name('create.number');

    // Product Number Store
    Route::post('products/create/number/store', [ProductController::class, 'productNumberStore'])->name('number.store');

    // Product configuration Create
    Route::get('products/create/configuration', [ProductController::class, 'productConfigurationCreate'])->name('create.configuration');

    // Product configuration Store
    Route::post('products/create/configuration/store', [ProductController::class, 'productConfigurationStore'])->name('configuration.store');
});




Route::get('/get-Warranty_extend-chart-data', [ChartDataWarrantyExtendController::class, 'getMonthlyWarrantyExtendData']);
Route::get('/get-Warranty_registration-chart-data', [ChartDataWarrantyRegistrationController::class, 'getMonthlywarrantyRegistrationData']);

Route::post('/getpurchaseCodeID', [UserController::class, 'getpurchaseCodeID']);


// Route::get('/', [HomeController::class,'indexx']);
Route::post('/getproductseries', [AdminController::class, 'getproductseries']);
Route::post('/getproductmodel', [AdminController::class, 'getproductmodel']);
Route::post('/getproductnumber', [AdminController::class, 'getproductnumber']);
Route::post('/getproductConfiguration', [AdminController::class, 'getproductConfiguration']);
