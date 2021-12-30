<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['guest']],function (){
    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::post('login',[LoginController::class,'login']);
    Route::get('register',[RegisterController::class,'index'])->name('register');
    Route::post('register',[RegisterController::class,'store']);



    Route::get('forgot-password',[ForgotPasswordController::class,'index'])->name('forgot-password');
    Route::post('forgot-password',[ForgotPasswordController::class,'reset']);
});

Route::group(['middleware'=>['auth']],function (){
    Route::get('home',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/', [DashboardController::class,'index']);

    Route::get('logout',[LogoutController::class,'index'])->name('logout');

    Route::get('categories',[CategoryController::class,'index'])->name('categories');
    Route::post('categories',[CategoryController::class,'store']);
    Route::put('categories',[CategoryController::class,'update']);
    Route::delete('categories',[CategoryController::class,'destroy'])->name('categories.delete');

    Route::get('medicines',[ProductController::class,'index'])->name('products');
    Route::get('medicines/create',[ProductController::class,'create'])->name('add-product');
    Route::get('expired-medicines',[ProductController::class,'expired'])->name('expired');
    Route::get('medicines/{product}',[ProductController::class,'show'])->name('edit-product');
    Route::get('outstock-medicines',[ProductController::class,'outstock'])->name('outstock');
    Route::post('medicines/create',[ProductController::class,'store']);
    Route::post('medicines/{product}',[ProductController::class,'update'])->name('update-medicine');
    Route::delete('medicines',[ProductController::class,'destroy'])->name('delete-medicine');

    Route::get('suppliers',[SupplierController::class,'index'])->name('suppliers');
    Route::get('add-supplier',[SupplierController::class,'create'])->name('add-supplier');
    Route::post('add-supplier',[SupplierController::class,'store']);
    Route::get('suppliers/{supplier}',[SupplierController::class,'show'])->name('edit-supplier');
    Route::delete('suppliers',[SupplierController::class,'destroy']);
    Route::put('suppliers/{supplier}}',[SupplierController::class,'update'])->name('edit-supplier');

    Route::get('stocks',[PurchaseController::class,'index'])->name('purchases');
    Route::get('add-stock',[PurchaseController::class,'create'])->name('add-purchase');
    Route::post('add-stock',[PurchaseController::class,'store'])->name('store-stock');
    Route::get('stocks/{purchase}',[PurchaseController::class,'show'])->name('edit-purchase');
    Route::put('stocks/{purchase}',[PurchaseController::class,'update']);
    Route::delete('stocks',[PurchaseController::class,'destroy'])->name('delete-stock');

    Route::get('sales',[SalesController::class,'index'])->name('sales');
    Route::post('sales',[SalesController::class,'store']);
    Route::put('sales',[SalesController::class,'update']);
    Route::delete('sales',[SalesController::class,'destroy']);

    Route::get('permissions',[PermissionController::class,'index'])->name('permissions');
    Route::post('permissions',[PermissionController::class,'store']);
    Route::put('permissions',[PermissionController::class,'update']);
    Route::delete('permissions',[PermissionController::class,'destroy']);

    Route::get('roles',[RoleController::class,'index'])->name('roles');
    Route::post('roles',[RoleController::class,'store']);
    Route::put('roles',[RoleController::class,'update']);
    Route::delete('roles',[RoleController::class,'destroy']);

    Route::get('users',[UserController::class,'index'])->name('users');
    Route::post('users',[UserController::class,'store']);
    Route::put('users',[UserController::class,'update']);
    Route::delete('users',[UserController::class,'destroy']);

    Route::get('profile',[UserController::class,'profile'])->name('profile');
    Route::post('profile',[UserController::class,'updateProfile']);
    Route::put('profile',[UserController::class,'updatePassword'])->name('update-password');

    Route::get('settings',[SettingController::class,'index'])->name('settings');

    Route::get('notification',[NotificationController::class,'markAsRead'])->name('mark-as-read');
    Route::get('notification-read',[NotificationController::class,'read'])->name('read');

    Route::get('reports',[ReportController::class,'index'])->name('reports');
    Route::post('reports',[ReportController::class,'getData']);


    Route::get('backup', [BackupController::class,'index'])->name('backup.index');
    Route::put('backup/create', [BackupController::class,'create'])->name('backup.store');
    Route::get('backup/download/{file_name?}', [BackupController::class,'download'])->name('backup.download');
    Route::delete('backup/delete/{file_name?}', [BackupController::class,'destroy'])->where('file_name', '(.*)')->name('backup.destroy');
});
