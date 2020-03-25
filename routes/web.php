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

	Route::get('home', 'HomeController@index')->name('home');
	Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

	Route::get('dashboard','Admin\DashboardController@index')->name('dashboard');
     

Route::get('offices','Agent\OfficeController\OfficeController@index')->name('office.index');
Route::get('office/create','Agent\OfficeController\OfficeController@create')->name('office.create');
Route::post('office/store','Agent\OfficeController\OfficeController@store')->name('office.store');
Route::get('office/edit/{id}','Agent\OfficeController\OfficeController@edit')->name('office.edit');
Route::post('office/create/{id}','Agent\OfficeController\OfficeController@update')->name('office.update');
Route::delete('offices/create/{id}','Agent\OfficeController\OfficeController@destroy')->name('office.destroy');



Route::get('countries','Agent\Country\CountryController@index')->name('country.index');
Route::get('countries/create','Agent\Country\CountryController@create')->name('country.create');
Route::post('countries/store','Agent\Country\CountryController@store')->name('country.store');
Route::get('countries/edit/{id}','Agent\Country\CountryController@edit')->name('country.edit');
Route::post('countries/create/{id}','Agent\Country\CountryController@update')
 ->name('country.update');
Route::delete('countriees/create/{id}','Agent\Country\CountryController@destroy')
->name('country.destroy');


    




