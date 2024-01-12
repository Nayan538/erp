<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\MerchandiserController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('dashboard', function () { return view('dashboard'); })->name('dashboard');

//Route::resource('staff',StaffController::class)->name('staff');

//ClientController
Route::get('client-profiles',[ClientController::class,'clientProfile'])->name('clientProfile');
Route::get('client-list',[ClientController::class,'clientList'])->name('clientList');
Route::get('client-category',[ClientController::class,'category'])->name('category');

// AccountingController
Route::get('account-head-type',[AccountingController::class,'accountHeadType'])->name('accountHeadType');
Route::get('account-heads',[AccountingController::class,'accountHead'])->name('accountHead');
Route::get('add-income',[AccountingController::class,'addIncome'])->name('addIncome');
Route::get('cash-accounts',[AccountingController::class,'cashAccount'])->name('cashAccount');
Route::get('general-ledger',[AccountingController::class,'generalLedger'])->name('generalLedger');
Route::get('income-expense',[AccountingController::class,'incomeExpense'])->name('incomeExpense');
Route::get('payment-channels',[AccountingController::class,'paymentChannel'])->name('paymentChannel');

// DeliveryController
Route::get('delivery-create',[DeliveryController::class,'deliveryCreate'])->name('deliveryCreate');
Route::get('delivery-edit',[DeliveryController::class,'deliveryEdit'])->name('deliveryEdit');
Route::get('delivery-view',[DeliveryController::class,'deliveryView'])->name('deliveryView');
Route::get('drivers',[DeliveryController::class,'driver'])->name('driver');
Route::get('logistics',[DeliveryController::class,'logistic'])->name('logistic');
Route::get('po-receive-list',[DeliveryController::class,'poReceiveList'])->name('poReceiveList');
Route::get('wo-delivery-list',[DeliveryController::class,'woDeliveryList'])->name('woDeliveryList');

// HrController
Route::get('attendance-records',[HrController::class,'attendanceRecord'])->name('attendanceRecord');
Route::get('attendance-type',[HrController::class,'attendanceType'])->name('attendanceType');
Route::get('bulk-attendance',[HrController::class,'bulkAttendance'])->name('bulkAttendance');
Route::get('departments',[HrController::class,'department'])->name('department');
Route::get('designations',[HrController::class,'designation'])->name('designation');
Route::get('staff-profiles',[HrController::class,'staffProfile'])->name('staffProfile');

// MerchandiserController
Route::get('merchandiser-list',[MerchandiserController::class,'merchandiser'])->name('merchandiser');

// PayrollController
Route::get('disbursement-types',[PayrollController::class,'disbursementType'])->name('disbursementType');
Route::get('payroll-records',[PayrollController::class,'payrollRecord'])->name('payrollRecord');
Route::get('salary-disbursements',[PayrollController::class,'salaryDisbursement'])->name('salaryDisbursement');

// WorkOrderController
Route::get('work-order-create',[WorkOrderController::class,'workOrderCreate'])->name('workOrderCreate');
Route::get('work-order-edit',[WorkOrderController::class,'workOrderEdit'])->name('workOrderEdit');
Route::get('work-order-transactions',[WorkOrderController::class,'workOrderTransaction'])->name('workOrderTransaction');
Route::get('work-order-view',[WorkOrderController::class,'workOrderView'])->name('workOrderView');
Route::get('work-orders',[WorkOrderController::class,'workOrder'])->name('workOrder');

// PurchaseController
Route::get('purchase-order-create',[PurchaseController::class,'purchaseOrderCreate'])->name('purchaseOrderCreate');
Route::get('purchase-order-edit',[PurchaseController::class,'purchaseOrderEdit'])->name('purchaseOrderEdit');
Route::get('purchase-order-view',[PurchaseController::class,'purchaseOrderView'])->name('purchaseOrderView');
Route::get('purchase-orders',[PurchaseController::class,'purchaseOrder'])->name('purchaseOrder');
Route::get('purchase-received-create',[PurchaseController::class,'purchaseReceivedCreate'])->name('purchaseReceivedCreate');
Route::get('purchase-received-edit',[PurchaseController::class,'purchaseReceivedEdit'])->name('purchaseReceivedEdit');
Route::get('purchase-transactions',[PurchaseController::class,'purchaseTransaction'])->name('purchaseTransaction');

// ProductController
Route::get('product-category',[ProductController::class,'productCategory'])->name('productCategory');
Route::get('product-items',[ProductController::class,'productItem'])->name('productItem');
Route::get('product-stocks',[ProductController::class,'productStocks'])->name('productStocks');
Route::get('product-unit',[ProductController::class,'productUnit'])->name('productUnit');

// SettingController
Route::get('currency',[SettingController::class,'currency'])->name('currency');
Route::get('settings',[SettingController::class,'setting'])->name('setting');

// VendorController
Route::get('vendor-category',[VendorController::class,'vendorCategory'])->name('vendorCategory');
Route::get('vendor-list',[VendorController::class,'vendorList'])->name('vendorList');
Route::get('vendor-profiles',[VendorController::class,'vendorProfile'])->name('vendorProfile');



