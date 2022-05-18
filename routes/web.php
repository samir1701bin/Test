<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrmController;


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

Route::get("login",[AdminController::class,'show'])->name('login');
Route::get("logout",[AdminController::class,'logout']);
Route::post("admin/login",[AdminController::class,'logincheck']);


Route::middleware(['logincheck'])->group(function () {

    Route::get("crm",[AdminController::class,'index']);
    Route::get("admin/admin_profile",[AdminController::class,'admin_profile']);
    Route::get("admin/general",[AdminController::class,'general']);
    Route::get("admin/forgot_password",[AdminController::class,'forgot_password']);
    Route::post("admin/upload_pic",[AdminController::class,'upload_pic']);
    Route::post("admin/change_pass",[AdminController::class,'change_pass']);
    Route::post("admin/update/personal_info",[AdminController::class,'update_personal_info'])->name('update_personal_info');


    Route::get("crm",[CrmController::class,'index']);
    Route::get("crm/add_lead",[CrmController::class,'add_lead']);
    Route::post("crm/modify/lead",[CrmController::class,'add_lead']);
    // Route::get("crm/all_lead",[CrmController::class,'leadtypes']);
    Route::get("crm/lead/{type}",[CrmController::class,'leadtypes']);
    // Route::get("crm/new_lead",[Crm::class,'new_lead']);
    // Route::get("crm/follow_up_lead",[Crm::class,'follow_up_lead']);
    // Route::get("crm/potential_lead",[Crm::class,'potential_lead']);
    // Route::get("crm/positive_lead",[Crm::class,'positive_lead']);
    // Route::get("crm/converted_lead",[Crm::class,'converted_lead']);
    // Route::get("crm/close_lead",[Crm::class,'close_lead']);
    Route::get("crm/lead_report",[CrmController::class,'lead_report']);
    Route::get("crm/bulk_lead",[CrmController::class,'bulk_lead']);
    Route::post("crm/modify/bulk_lead",[CrmController::class,'bulk_lead']);
    Route::get("crm/crm_setting",[CrmController::class,'crm_setting']);
    
    Route::get("/itinerary",[Itinerary::class,'index']);
    Route::get("itinerary/create_itinerary",[Itinerary::class,'create_itinerary']);
    Route::get("itinerary/draft_itinerary",[Itinerary::class,'draft_itinerary']);
    Route::get("itinerary/send_proposal",[Itinerary::class,'send_proposal']);
    Route::get("itinerary/draft_proposal",[Itinerary::class,'draft_proposal']);
    Route::get("itinerary/activity",[Itinerary::class,'activity']);
    Route::post("itinerary/modify/activity",[Itinerary::class,'activity']);
    Route::get("itinerary/hotel",[Itinerary::class,'hotel']);
    Route::post("itinerary/modify/hotel",[Itinerary::class,'hotel']);
    Route::get("itinerary/flight",[Itinerary::class,'flight']);
    Route::post("itinerary/modify/flight",[Itinerary::class,'flight']);
    Route::get("itinerary/train",[Itinerary::class,'train']);
    Route::post("itinerary/modify/train",[Itinerary::class,'train']);
    Route::get("itinerary/transport",[Itinerary::class,'transport']);
    Route::post("itinerary/modify/transport",[Itinerary::class,'transport']);
    Route::get("itinerary/cruise",[Itinerary::class,'cruise']);
    Route::post("itinerary/modify/cruise",[Itinerary::class,'cruise']);

    Route::get("invoice",[InvoiceController::class,'index']);
    Route::get("invoice/create_invoices",[InvoiceController::class,'create_invoices']);
    Route::post("invoice/modify/invoices",[InvoiceController::class,'create_invoices']);
    Route::get("invoice/generate_invoice/{invoice_id}",[InvoiceController::class,'generatePDF']);
    Route::get("invoice/update_invoice/{invoice_id}",[InvoiceController::class,'update_invoices']);
    Route::post("invoice/modify/invoices/{invoice_id}",[InvoiceController::class,'update_invoices']);
    Route::get("invoice/unpaid_invoices",[InvoiceController::class,'unpaid_invoices']);
    Route::get("invoice/over_due_invoices",[InvoiceController::class,'over_due_invoices']);
    Route::get("invoice/partially_paid_invoices",[InvoiceController::class,'partially_paid_invoices']);
    Route::get("invoice/fully_paid_invoices",[InvoiceController::class,'fully_paid_invoices']);
    Route::get("invoice/pending_invoices",[InvoiceController::class,'pending_invoices']);
    Route::get("invoice/completed_invoices",[InvoiceController::class,'completed_invoices']);
    
    Route::get("booking",[Booking::class,'index']);
    Route::get("booking/upcoming_trips",[Booking::class,'upcoming_trips']);
    Route::get("booking/past_trip",[Booking::class,'past_trip']);
    Route::get("booking/cancelled_trip",[Booking::class,'cancelled_trip']);
    Route::get("booking/generate_report",[Booking::class,'generate_report']);
    Route::get("booking/fully_paid_trip",[Booking::class,'fully_paid_trip']);
    Route::get("booking/partially_paid_trip",[Booking::class,'partially_paid_trip']);
    Route::get("booking/unpaid_trips",[Booking::class,'unpaid_trips']);
    Route::get("booking/overdue_tripes",[Booking::class,'overdue_tripes']);
    Route::get("booking/trip_details",[Booking::class,'trip_details']);
    
    Route::get("client",[Client::class,'index']);
    Route::get("client/b2b_client",[Client::class,'b2b_client']);
    Route::get("client/create_client",[Client::class,'create_client']);
    Route::post("client/modify",[Client::class,'create_client']);
    Route::get("client/b2c_client",[Client::class,'b2c_client']);
    Route::get("client/client_profile",[Client::class,'client_profile']);
    Route::get("client/update_client",[Client::class,'update_client']);
    Route::get("client/corporate_client",[Client::class,'corporate_client']);
    Route::get("client/upcoming_occasions",[Client::class,'upcoming_occasions']);
    Route::get("client/client_report",[Client::class,'client_report']);
    Route::get("client/client_profile_setting",[Client::class,'client_profile_setting']);
    
    Route::get("account",[Account::class,'index']);
    Route::get("account/payable_receivable",[Account::class,'payable_receivable']);
    Route::get("account/profit_loss_summary",[Account::class,'profit_loss_summary']);
    Route::get("account/payable_supplier",[Account::class,'payable_supplier']);
    Route::get("account/paid_to_supplier",[Account::class,'paid_to_supplier']);
    Route::get("account/supplier_wise_payments",[Account::class,'supplier_wise_payments']);
    Route::get("account/overdue_payable",[Account::class,'overdue_payable']);
    Route::get("account/receivable",[Account::class,'receivable']);
    Route::get("account/received",[Account::class,'received']);
    Route::get("account/overdue_receivable",[Account::class,'overdue_receivable']);
    Route::get("account/expense_report",[Account::class,'expense_report']);
    Route::get("account/recurring_expenses",[Account::class,'recurring_expenses']);
    Route::get("account/expense_setting",[Account::class,'expense_setting']);
    
    Route::get("report",[Report::class,'index']);
    Route::get("report/according_report",[Report::class,'according_report']);
    Route::get("report/invoices",[Report::class,'invoices']);
    Route::get("report/paid_to_supplier",[Report::class,'paid_to_supplier']);
    Route::get("report/payable_to_supplier",[Report::class,'payable_to_supplier']);
    Route::get("report/supplier_wise_report",[Report::class,'supplier_wise_report']);
    Route::get("report/tax_payable",[Report::class,'tax_payable']);
    Route::get("report/customer_payment",[Report::class,'customer_payment']);
    Route::get("report/expenses",[Report::class,'expenses']);
    Route::get("report/profit_loss",[Report::class,'profit_loss']);
    Route::get("report/lead_report",[Report::class,'lead_report']);
    
    Route::get("setting",[Setting::class,'index']);
});
