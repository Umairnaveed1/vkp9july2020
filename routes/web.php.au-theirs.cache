<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Agent\Agent;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
		
	Route::get('agent/default', 'HomeController@agenthome')->name('agent.home');

	Route::get('agents', 'HomeController@index')->name('home');
	Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

	Route::get('dashboard','Admin\DashboardController@index')->name('dashboard')->middleware('admin');
     
	Route::get('agent/create','Admin\DashboardController@create')->name('agent.create')->middleware('admin');
	Route::post('agent/state','Admin\DashboardController@state')->name('agent.state')->middleware('admin');
	Route::post('agent/city','Admin\DashboardController@city')->name('agent.city')->middleware('admin');
	Route::post('agent/zipcode','Admin\DashboardController@zipcode')->name('agent.zipcode')->middleware('admin');
	Route::post('agent/save','Admin\DashboardController@save')->name('agent.save')->middleware('admin');
	Route::get('agent/edit','Admin\DashboardController@get')->name('agent.edit')->middleware('admin');
	Route::post('agent/create_agent_expence','Admin\DashboardController@create_agent_expence')
->name('agent.create_agent_expence')->middleware('admin');
	Route::post('agent/delete_expence','Admin\DashboardController@delete_expence')->name('agent.delete_expence')
                   ->middleware('admin');
	Route::post('agent/expence_onhold','Admin\DashboardController@expence_onhold')->name('agent.expence_onhold')->middleware('admin');
	Route::post('agent/expence_detial','Admin\DashboardController@expence_detial')->name('agent.expence_detial')->middleware('admin');
	Route::post('agent/update','Admin\DashboardController@update')->name('agent.update')->middleware('admin');

	Route::post('agent/productivity_save','Admin\DashboardController@productivity_save')->name('agent.productivity_save')->middleware('admin');;
	Route::get('invoice/index','Invoice\addInvoiceController@index')->name('invoice.index');
	Route::post('invoice/get_property','Invoice\addInvoiceController@get_property')->name('invoice.get_property');
	Route::post('invoice/get_month_count','Invoice\addInvoiceController@get_month_count')->name('invoice.get_month_count');
	Route::post('invoice/get_prev_invoice','Invoice\addInvoiceController@get_prev_invoice')->name('invoice.get_prev_invoice');
	Route::get('invoice/search','Invoice\addInvoiceController@search')->name('invoice.search');
	Route::post('invoice/get_search','Invoice\addInvoiceController@get_search')->name('invoice.get_search');
	Route::post('invoice/get_search_first','Invoice\addInvoiceController@get_search_first')->name('invoice.get_search_first');
	Route::post('invoice/get_single_invoice','Invoice\addInvoiceController@get_single_invoice')->name('invoice.get_single_invoice');
	
	Route::post('invoice/store','Invoice\addInvoiceController@store')->name('invoice.store'); 
	
	Route::post('agentnotes/create','Admin\agentnotesController@create')->name('agentnotes.create')->middleware('admin');
	Route::post('agentnotes/delete','Admin\agentnotesController@delete')->name('agentnotes.delete')->middleware('admin');
     

     	Route::post('agent/miscincome','miscincome\miscincomeController@index')->name('agent.miscincome')->middleware('admin');
	Route::post('agent/miscincome/onhold','miscincome\miscincomeController@onhold')->name('agent.miscincome.onhold')->middleware('admin');
Route::post('agent/miscincome/delete','miscincome\miscincomeController@delete')->name('agent.miscincome.delete')->middleware('admin');
Route::post('agent/get_miscincome_detial','miscincome\miscincomeController@get_miscincome_detial')->name('agent.get_miscincome_detial')->middleware('admin');  







Route::get('countries','Agent\Country\CountryController@index')->name('country.index')->middleware('admin');
Route::get('countries/create','Agent\Country\CountryController@create')->name('country.create')->middleware('admin');
// Route::post('countries/create','Agent\Country\CountryController@store')->name('country.store');
Route::post('country/save','Agent\Country\CountryController@save')->name('compnay.save');

Route::get('countries/edit/{id}','Agent\Country\CountryController@edit')->name('country.edit');
Route::post('countries/update/{id}','Agent\Country\CountryController@update')
 ->name('country.update');
 Route::post('country/delete','Agent\Country\CountryController@delete')->name('country.delete');

// Route::delete('countriees/create/{id}','Agent\Country\CountryController@destroy')
// ->name('country.destroy');




Route::get('offices','Agent\OfficeController\OfficeController@index')->name('office.index');

Route::get('office/create','Agent\OfficeController\OfficeController@create')->name('office.create');

Route::post('office/store','Agent\OfficeController\OfficeController@store')->name('office.store');

Route::get('office/edit/{id}','Agent\OfficeController\OfficeController@edit')->name('office.edit');

Route::post('office/create/{id}','Agent\OfficeController\OfficeController@update')->name('office.update');

Route::delete('offices/create/{id}','Agent\OfficeController\OfficeController@destroy')->name('office.destroy');

    


Route::get('users/index','Admin\User\UserController@index')->name('user.index'); 
Route::get('users/create/{id}','Admin\User\UserController@create')->name('user.create'); 
Route::get('users/edit/{id}','Admin\User\UserController@edit')->name('users.edit');

Route::post('users/store','Admin\User\UserController@store')->name('users.store');
Route::post('users/create/{id}','Admin\User\UserController@update')->name('users.update');
Route::get('users/index/{id}', 'Admin\User\UserController@status')->name('status');
Route::get('users/setting','Admin\User\UserController@setting')->name('users.setting');
Route::post('users/settingstore','Admin\User\UserController@settingstore')
->name('users.settingstore');
Route::get('users/settingsedit/{id}','Admin\User\UserController@settingsedit')->name('users.settingsedit');
Route::any('users/setting/{id}','Admin\User\UserController@settingsupdate')->name('users.settingsupdate');






Route::get('company/info','admin\CompanyController@index')->name('company.index');
Route::post('company/create','admin\CompanyController@create')->name('company.create');


 
Route::get('rule/tiers','Rules\RulesController\RulesController@index')->name('rule.tiers');
Route::post('ajax/{id}','Rules\RulesController\RulesController@post');

Route::post('managetier/{id}','Rules\RulesController\RulesController@managetier');
Route::post('ruledelete/{idelete}','Rules\RulesController\RulesController@delete');
Route::post('tierdelete/{id}','Rules\RulesController\RulesController@tierdelete');
Route::post('percent/{id}','Rules\RulesController\RulesController@managepercent');


Route::get('compnay/managment','Company_Managment\company_managmentController@index')->name('compnay.managment');

Route::get('compnay/managment/create','Company_Managment\company_managmentController@create')->name('compnay.managment.create');
Route::post('compnay/managment/get_state','Company_Managment\company_managmentController@get_state')->name('compnay.managment.get_state');
Route::post('compnay/managment/get_city','Company_Managment\company_managmentController@get_city')->name('compnay.managment.get_state');
Route::post('compnay/managment/get_zip_code','Company_Managment\company_managmentController@get_zip_code')->name('compnay.managment.get_state');



Route::post('compnay/managment/save','Company_Managment\company_managmentController@save')->name('compnay.managment.save');
Route::post('compnay/managment/get_list','Company_Managment\company_managmentController@get_list')->name('compnay.managment.get_list');

Route::get('compnay/managment/edit','Company_Managment\company_managmentController@edit')->name('compnay.managment.edit');
Route::post('compnay/managment/update','Company_Managment\company_managmentController@update')->name('compnay.managment.update');



Route::get('admin/form','adminform\adminformController@index')->name('compnay.form');
Route::post('admin/form/get_office_detail','adminform\adminformController@agentsdetail')->name('compnay.agentsdetail');

Route::post('admin/form/save','adminform\adminformController@save')->name('compnay.form.save');
Route::post('admin/form/edit','adminform\adminformController@edit')->name('compnay.form.edit');
Route::post('admin/form/delete','adminform\adminformController@delete')->name('compnay.form.delete');

Route::post('admin/state/save','Agent\State\StateController@state_create')->name('admin.state.save');
Route::post('admin/state/get','Agent\State\StateController@get')->name('admin.state.get');
Route::post('admin/state/delete','Agent\State\StateController@delete')->name('admin.state.delete');

Route::post('admin/city/get_state','Agent\City\CityController@get_state')->name('admin.city.get_state');
Route::post('admin/city/save','Agent\City\CityController@create')->name('admin.city.save');
Route::post('admin/city/get','Agent\City\CityController@get')->name('admin.city.get');
Route::post('admin/city/get_city','Agent\City\CityController@get_city')->name('admin.city.get_city');
Route::post('admin/city/delete','Agent\City\CityController@delete')->name('admin.city.delete');


Route::post('admin/zipcode/get_state','Agent\ZipCode\ZipCodeController@get_state')->name('admin.zipcode.get_state');
//Route::post('admin/city/save','Agent\ZipCode\ZipCodeController@create')->name('admin.zipcode.save');
Route::post('admin/zipcode/save','Agent\ZipCode\ZipCodeController@create')->name('admin.zipcode.save');
Route::post('admin/zipcode/get','Agent\ZipCode\ZipCodeController@get')->name('admin.zipcode.get');
Route::post('admin/zipcode/get_city','Agent\ZipCode\ZipCodeController@get_city')->name('admin.zipcode.get_city');
Route::post('admin/zipcode/delete','Agent\ZipCode\ZipCodeController@delete')->name('admin.zipcode.delete');


Route::get('sidebar','Admin\User\UserController@sidebar')->name('sidebar');
Route::get('agent/resource','Agent\AgentResource\AgentResourceController@index')->name('agent.resource');
Route::get('agent/resource/autoPays_propertylist','Agent\AgentResource\AgentResourceController@autoPays_propertylist')->name('agent.resource.autoPays_propertylist');
Route::get('agent/resource/doNotPlace_propertylist','Agent\AgentResource\AgentResourceController@donotplace_propertylist')->name('agent.resource.doNotPlace_propertylist');
Route::get('agent/resource/noContract_propertylist','Agent\AgentResource\AgentResourceController@nocontract_propertylist')->name('agent.resource.noContract_propertylist');
Route::get('agent/resource/slowPay_propertylist','Agent\AgentResource\AgentResourceController@slowpay_propertylist')->name('agent.resource.slowPay_propertylist');


Route::get('propert/manage','Agent\property\PropertyController@index')->name('property.manage');
Route::get('addmanagement','Agent\property\PropertyController@create');
Route::post('postdata','Agent\property\PropertyController@post')->name('property.post');

// Route::post('property/get-state-list','Agent\property\PropertyController@getStateList');
// Route::post('property/get-city-list','Agent\property\PropertyController@getCityList');
// Route::post('property/get-zipcode-list','Agent\property\PropertyController@getZipCodeList');

Route::post('postinvoice','Agent\property\PropertyController@postinvoices')->name('post.invoice');

Route::post('comapnysubmit','Agent\property\PropertyController@postcomantname');

// Route::get('propertymanage','Admin\PropertyManagement\PropertyManageController@index')
// ->name('propertymanage.index');
Route::get('propertymanage/index','Admin\PropertyManagement\PropertyManageController@index')
->name('propertymanage.index');
Route::post('propertymanage/get_property_list','Admin\PropertyManage\PropertyManageController@get_property_list')
->name('getpropertylist');
// Route::get('propertymanage/edit','Admin\PropertyManage\PropertyManageController@edit')->name('propertymanagement.edit');
Route::get('propertymanage/create','Admin\PropertyManage\PropertyManageController@create')->name('propertymanage.create');
Route::get('prpoerty/search', 'Admin\PropertyManage\PropertyManageController@search')->name('propertymanage.search');


Route::get('changepassword','Password\ChangepassController@index')->name('change.changepassword');
Route::put('updatepassword','Password\ChangepassController@update');
Route::post('propertymanage/add','Admin\PropertyManagement\PropertyManageController@store')->name('propertymanage.post');
Route::any('propertymanage/update/{id}','Admin\PropertyManagement\PropertyManageController@update');
Route::get('propertymanage/edit','Admin\PropertyManagement\PropertyManageController@edit')->name('propertymanage.edit');



Route::get('admin/dashboard/notes','Admin\Notes\DashboardNoteController@index')->name('notes.index');

Route::get('get-state-list','Agent\property\PropertyController@getStateList');
Route::get('get-city-list','Agent\property\PropertyController@getCityList');
Route::get('get-zipcode-list','Agent\property\PropertyController@getZipcodeList');
Route::get('compnay/admin', 'Company_Admin\company_adminController@index')->name('compnay.admin');
Route::post('compnay/admin/create', 'Company_Admin\company_adminController@create')->name('compnay.admin.create');
Route::get('compnay/admin/edit', 'Company_Admin\company_adminController@edit')->name('compnay.admin.edit');
Route::post('compnay/admin/update', 'Company_Admin\company_adminController@update')->name('compnay.admin.update');
Route::post('compnay/admin/delete', 'Company_Admin\company_adminController@delete')->name('compnay.admin.delete');

Route::get('agents/billing','HomeController@agentbilling')->name('agents.billing');
Route::get('agents/home','HomeController@billinghome')->name('agents.home');

Route::get('agents/homeleasebilling','HomeController@homeleasebilling')->name('agents.homeleasebilling');
Route::get('agents/appartmentbilling','HomeController@appartmentbilling')
->name('agents.appartmentbilling');
Route::get('agents/homesalebilling','HomeController@homesalebilling')
->name('agents.homesalebilling');
Route::post('addHomeSaleBilling','HsbillingsController@store')
->name('addHomeSaleBilling');

Route::get('agents/billing/autoHomeHoldFee','Agent\Billing\AutoHomeController@autoHomeHoldFee')->name('agents.billing.autoHomeHoldFee');
Route::post('agents/billing/getPropertyData','Agent\Billing\AutoHomeController@getPropertyData')->name('agents.billing.getPropertyData');
Route::post('agents/billing/store_AutoHomeHoldFee','Agent\Billing\AutoHomeController@store_AutoHomeHoldFee')->name('agents/billing/store_AutoHomeHoldFee');
Route::get('about-us','BaseController@about_us')->name('about-us');
Route::get('contact','BaseController@contact')->name('contact');
Route::get('services','BaseController@services')->name('services');


Route::get('agents/appartmentbilling','Agent\AppartmentBilling\AppartmentBillingController@create')
->name('agents.appartmentbilling');
Route::post('agents/appartmentbilling/store','Agent\AppartmentBilling\AppartmentBillingController@store')
->name('appartmentbilling.store');

// Route::post('note/', 'Admin\PropertyManage\PropertyManageController@save_notes');
Route::post('notesubmit/{id}','Admin\PropertyManagement\PropertyManageController@notes');
Route::post('admin/delete_expence','Admin\PropertyManagement\PropertyManageController@deletenotes');

Route::post('addHomeLeaseBillings','HlbillingsController@store')->name('addHomeLeaseBillings');
Route::post('get_property','HlbillingsController@fetchProperty')->name('get_property'); 

/* Clear Cache */ 
Route::get('/clear-cache', function() { 
$exitCode = Artisan::call('config:clear'); 
$exitCode = Artisan::call('cache:clear');
$exitCode = Artisan::call('config:cache'); 
return 'DONE'; /*Return anything*/
});

Route::get('autopay/create','Admin\AutoPay\AutoPayController@create')->name('autopay.create');
Route::post('autopay/apply_holding_fee','Admin\AutoPay\AutoPayController@apply_holding_fee')->name('autopay.apply_holding_fee');
Route::post('autopay/holding_fee_get','Admin\AutoPay\AutoPayController@holding_fee_get')->name('autopay.holding_fee_get');
Route::get('security/index','Admin\Security\SecurityController@index')->name('security.index');
//added by Salik
Route::post('autopay/store','Admin\AutoPay\AutoPayController@store')->name('autopay.store');
Route::post('autopay/NoPay','Admin\AutoPay\AutoPayController@NoPay')->name('autopay.NoPay');
//end

//admin Management
Route::get('admin_manage_invoices','Admin\AdminManagement\AdminManagementController@manage_invoices')->name('admin_manage_invoices');
Route::get('admin_manage_payments','Admin\AdminManagement\AdminManagementController@manage_payments')->name('admin_manage_payments');
Route::get('admin_approval_screen','Admin\AdminManagement\AdminManagementController@approval_screen')->name('admin_approval_screen');
Route::get('admin_feeRecieptScreen','Admin\AdminManagement\AdminManagementController@feeRecieptScreen')->name('feeRecieptScreen');
Route::post('store_feeRecieptRCVD','Admin\AdminManagement\AdminManagementController@store_feeRecieptRCVD')->name('admin.adminManagement.store_feeRecieptRCVD');
Route::get('admin_feeholdScreen','Admin\AdminManagement\AdminManagementController@feeholdScreen')->name('feeholdScreen');
Route::get('print_feeholdScreen', 'Admin\AdminManagement\AdminManagementController@print_feeholdScreen');
Route::post('admin_getFeeholdScreen','Admin\AdminManagement\AdminManagementController@getFeeholdScreen')->name('getFeeholdScreen');

Route::get('adminapproval/edit/{id}','Admin\AdminManagement\AdminManagementController@approvaledit')
->name('feeapproval.edit');
Route::post('adminapproval/create/{id}','Admin\AdminManagement\AdminManagementController@approvalstore')
     ->name('feeapproval.store');
Route::match(['get','post'],'admin_approval','Admin\AdminManagement\AdminManagementController@admin_approval')->name('admin_approval');
Route::match(['get','post'],'admin_approval/view','Admin\AdminManagement\AdminManagementController@approvalview')->name('admin_approval.view');

Route::POST('detial_feehold/{id}', 'Admin\AdminManagement\AdminManagementController@detial_feehold');
Route::post('admin_approval_invoice_store/{id}','Admin\AdminManagement\AdminManagementController@invstore');
Route::match(['get','post'],'admin_approval_invoice','Admin\AdminManagement\AdminManagementController@admin_approval_invoice')->name('admin_approval_invoice');
//Views
Route::get('view_approved_bill','Admin\ViewsController@view_approved_bill')->name('view_approved_bill');
Route::get('viewapprovedbill/{id}','Admin\ViewsController@viewapprovedbill')->name('viewapprovedbill');
Route::get('auto_home_hold_fee','Admin\ViewsController@auto_home_hold_fee')->name('auto_home_hold_fee');
Route::post('get_auto_home_hold_fee','Admin\ViewsController@get_auto_home_hold_fee')->name('get_auto_home_hold_fee');
Route::get('view_pending_fee.','Admin\ViewsController@view_pending_fee')->name('view_pending_fee');
Route::post('get_view_pending_fee','Admin\ViewsController@get_view_pending_fee')->name('get_view_pending_fee');
Route::get('view_rejected_bill','Admin\ViewsController@view_rejected_bill')->name('view_rejected_bill');
Route::match(['POST','GET'],'viewrejectedbill{id}','Admin\ViewsController@viewrejectedbill')
->name('viewrejectedbill');
Route::match(['POST','GET'],'billrestore','Admin\ViewsController@rejectedbillstore')
->name('rejectedbill.store');



Route::get('/deposit','Admin\AdminManagement\AdminManagementController@deposit')->name('deposit');
Route::post('detial_view','Admin\PropertyManagement\PropertyManageController@detial_view');

Route::get('securitylevel','securitylevel\securitylevelController@index');
Route::post('securitylevel/create','securitylevel\securitylevelController@create')->name('securitylevel.create');
Route::post('securitylevel/update','securitylevel\securitylevelController@update')->name('securitylevel.update');
Route::get('securitylevel/get','securitylevel\securitylevelController@get')->name('securitylevel.get');

Route::resource('pagesecurity', 'Admin\Security\SecurityController');
Route::get('printdata/{id}', 'Admin\PropertyManagement\PropertyManageController@printdata');
Route::any('sendemail', 'Invoice\addInvoiceController@email')->name('sendemail');

Route::match(['get','post'],'searchinvoice/index','Admin\SearchInvoice\SearchInvoiceController@index')->name('searchinvoice.index');
Route::post('searchinvoice/get_search','Admin\SearchInvoice\SearchInvoiceController@get_search')->name('searchinvoice.get_search');
Route::get('searchinvoice/search','Admin\SearchInvoice\SearchInvoiceController@search')->name('searchinvoice.search');
Route::post('searchinvoice/get_search_first','Admin\SearchInvoice\SearchInvoiceController@get_search_first')->name('searchinvoice.get_search_first');
Route::post('searchinvoice/get_property_search','Admin\SearchInvoice\SearchInvoiceController@get_property_search')->name('searchinvoice.get_property_search');
Route::post('searchinvoice/get_tenant','Admin\SearchInvoice\SearchInvoiceController@get_tenant')->name('searchinvoice.get_tenant');

Route::post('get_company_details','HsbillingsController@fetchCompanyDetails')->name('get_company_details');
Route::post('appartmentbilling/get_property','Agent\AppartmentBilling\AppartmentBillingController@property')->name('appartmentbilling.property'); 
Route::get('companyprint/{id}', 'Company_Managment\company_managmentController@print');
Route::POST('historynotes/{id}', 'Company_Managment\company_managmentController@historynotes');
Route::POST('detial_view_history', 'Company_Managment\company_managmentController@historydetails');
Route::POST('admin/delete_historynotes', 'Company_Managment\company_managmentController@deletehistorynotes');
Route::get('companyhistory/{id}', 'Company_Managment\company_managmentController@printhistory');
Route::post('approveHoldingfee', 'Admin\AdminManagement\AdminManagementController@approveHoldingfee')->name('approveHoldingfee'); 
 
Route::post('feeapproval', 'Admin\AdminManagement\AdminManagementController@feeapproval')
->name('feeapproval'); 



Route::get('admin/reports','Admin\Reports\ReportController@index')->name('reports.index');
Route::get('admin/propertyreports','Admin\Reports\ReportController@property')->name('reports.property');
Route::get('admin/propertyreceipt','Admin\Reports\ReportController@propertyreceipt')->name('reports.propertyreceipt');
Route::get('admin/reports_property_deliquency','Admin\Reports\ReportController@propertydeliquency')->name('reports.property_deliquency');
Route::get('admin/reports/propertynotes','Admin\Reports\ReportController@propertynotes')->name('reports.property.notes');
Route::get('admin/reports/agentadvance','Admin\Reports\ReportController@agentadvance')->name('reports.agent.advance');


Route::get('admin/reports/agent_productivity','Admin\Reports\ReportController@agentproductivity')->name('reports.agentproductivity');
Route::get('admin/reports/autopayaummary','Admin\Reports\ReportController@autopayaummary')->name('reports.autopayaummary');
Route::get('admin/reports/agentcomission','Admin\Reports\ReportController@agentcomission')->name('reports.agentcomission');
Route::get('admin/reports/comissionsummary','Admin\Reports\ReportController@comissionsummary')->name('reports.comissionsummary');
Route::get('view_pending_fee_data','Agent\Pendingfee\pendingfeeController@index')->name('view_pending_fee_data');
Route::get('pending_fee/{id}','Agent\Pendingfee\pendingfeeController@viewfee')->name('pending_fee');
Route::get('manageinvoice/edit/{id}','Admin\AdminManagement\AdminManagementController@minvoiceedit')
->name('invoice.edit');
Route::patch('saveinvoice/{id}','Admin\AdminManagement\AdminManagementController@saveinvoice')
->name('invoiceupdate');

Route::get('get-property-list','Admin\AdminManagement\AdminManagementController@getPropertyList');

Route::get('billform/view/{id}','Admin\AdminManagement\AdminManagementController@billform')
->name('bill.form');
Route::get('viewinvoice/{id}','Admin\AdminManagement\AdminManagementController@viewdata');

Route::get('tabledit', 'Admin\AdminManagement\AdminManagementController@index');

Route::post('tabledit/action', 'Admin\AdminManagement\AdminManagementController@action')->name('tabledit.action');
Route::any('paymentpost','Admin\AdminManagement\AdminManagementController@paymentpost')->name('paymentpost');




Route::get('jquery-ajax-paymentpost-submit', 'Admin\AdminManagement\AdminManagementController@index');
Route::post('jquery-ajax-paymentpost-submit', 'Admin\AdminManagement\AdminManagementController@store');

Route::get('admin/check/create','Admin\Checks\CheckController@create')->name('check.create');
