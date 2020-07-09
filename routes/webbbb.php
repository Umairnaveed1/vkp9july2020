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


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

	Route::get('agents', 'HomeController@index')->name('home');
	Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

	Route::get('dashboard','Admin\DashboardController@index')->name('dashboard');
     







Route::get('countries','Agent\Country\CountryController@index')->name('country.index');
Route::get('countries/create','Agent\Country\CountryController@create')->name('country.create');
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
Route::post('admin/form/save','adminform\adminformController@save')->name('compnay.form.save');
Route::post('admin/form/edit','adminform\adminformController@edit')->name('compnay.form.edit');
Route::post('admin/form/delete','adminform\adminformController@delete')->name('compnay.form.delete');

Route::get('sidebar','Admin\User\UserController@sidebar')->name('sidebar');
Route::get('agent/resource','Agent\AgentResource\AgentResourceController@index')->name('agent.resource');

