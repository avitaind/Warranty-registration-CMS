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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// User

// Dashboard
// Route::get('/', [UserController::class, 'index']);
Route::get('/customer', [UserController::class, 'index'])->name('home');

// Profile
Route::get('/', [UserController::class, 'profile']);
Route::get('customer/profile', [UserController::class, 'profile'])->name('profile');
Route::post('customer/profile/profilesave', [UserController::class, 'profilesave'])->name('profilesave');

// Password Change
Route::get('customer/password-change', [UserController::class, 'changePassword'])->name('change-password');
Route::post('customer/password-change/store', [UserController::class, 'changePasswordSave'])->name('user.changePassword');

// Register Product
Route::get('customer/my-product', [UserController::class, 'myProduct'])->name('my-product');

// Product Registration
Route::get('customer/product-registration', [UserController::class, 'productRegistration'])->name('product-registration');
Route::post('customer/product-registration/store', [UserController::class, 'productRegistrationStore'])->name('productRegistrationStore.store');

// Product Extend
Route::get('customer/product-extend', [UserController::class, 'productExtend'])->name('product-extend');
Route::post('customer/product-extend/store', [UserController::class, 'productExtendStore'])->name('productExtendStore.store');
Route::get('customer/product-extend/search', [UserController::class, 'productExtendStore']);

// test
// Route::post('user/product-extend/store', [UserController::class, 'productExtendStores'])->name('productExtendStores.store');

// ContactUS
Route::get('customer/contactUS', [UserController::class, 'contactUS'])->name('contactus');


Route::post('/getpurchaseCodeID', [UserController::class, 'getpurchaseCodeID']);


// Route::get('/', [HomeController::class,'indexx']);
Route::post('/getproductseries', [AdminController::class, 'getproductseries']);
Route::post('/getproductmodel', [AdminController::class, 'getproductmodel']);
Route::post('/getproductnumber', [AdminController::class, 'getproductnumber']);
Route::post('/getproductConfiguration', [AdminController::class, 'getproductConfiguration']);


// Admin
Route::get('admin', [AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/get-Warranty_extend-chart-data', [ChartDataWarrantyExtendController::class, 'getMonthlyWarrantyExtendData']);
Route::get('/get-Warranty_registration-chart-data', [ChartDataWarrantyRegistrationController::class, 'getMonthlywarrantyRegistrationData']);

// Admin Profile
Route::get('admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

// Admin Profile Update
Route::post('admin/profile/profilesave', [AdminController::class, 'adminProfilesave'])->name('admin.profilesave');

// Admin Password Change
Route::post('changePassword', [AdminController::class, 'changePasswordSave'])->name('changePassword');

// All User
Route::get('admin/customers', [AdminController::class, 'user'])->name('user');

// All Warranty Registration
Route::get('admin/warranty-registration', [AdminController::class, 'warrantyRegistration'])->name('warranty-registration');

// All Warranty Registration
Route::get('admin/warranty-extend', [AdminController::class, 'warrantyExtend'])->name('warranty-extend');

// All Warranty Certificate
// Route::get('admin/certificate', [AdminController::class, 'certificateWarranty'])->name('certificate');
Route::get('admin/certificate', 'AdminController@certificateWarranty')->name('certificate');

// All Warranty Certificate
Route::get('admin/certificate/create', [AdminController::class, 'certificateCreate'])->name('certificate.create');
Route::post('admin/certificate/store', [AdminController::class, 'certificateStore'])->name('certificate.store');

Route::get('admin/certificate/DownloadPDF/{id}', [AdminController::class, 'certificatedownloadPDF'])->name('downloadPDF');
Route::get('admin/certificate/certificateMail/{id}', [AdminController::class, 'certificateMail'])->name('certificateMail');


// Product CURD

// Route::resource('admin/products', App\Http\Controllers\App\Http\Controllers\ProductController::class);

// Product All

Route::get('admin/products/', [ProductController::class, 'index'])->name('products.index');

// Product Create
Route::get('admin/products/create/', [ProductController::class, 'create'])->name('products.create');

// Product Type Create
Route::get('admin/products/create/product-type', [ProductController::class, 'createproductTypes'])->name('product.add');

// Product Type store
Route::post('admin/products/create/product-type/store', [ProductController::class, 'productTypestore'])->name('product.store');

// Product Series Create
Route::get('admin/products/create/series', [ProductController::class, 'productSeries'])->name('create.series');

// Product Series Store
Route::post('admin/products/create/series/store', [ProductController::class, 'productSeriesstore'])->name('series.store');

// Product Model Create
Route::get('admin/products/create/model', [ProductController::class, 'productModelsCreate'])->name('create.model');

// Product Model Store
Route::post('admin/products/create/model/store', [ProductController::class, 'productModelsStore'])->name('model.store');

// Product Number Create
Route::get('admin/products/create/number', [ProductController::class, 'productNumberCreate'])->name('create.number');

// Product Number Store
Route::post('admin/products/create/number/store', [ProductController::class, 'productNumberStore'])->name('number.store');

// Product configuration Create
Route::get('admin/products/create/configuration', [ProductController::class, 'productConfigurationCreate'])->name('create.configuration');

// Product configuration Store
Route::post('admin/products/create/configuration/store', [ProductController::class, 'productConfigurationStore'])->name('configuration.store');
