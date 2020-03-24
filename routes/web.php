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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard','Admin\DashboardController@index')->name('dashboard');

Route::get('offices','Agent\OfficeController\OfficeController@index')->name('office.index');
Route::get('office/create','Agent\OfficeController\OfficeController@create')->name('office.create');
Route::post('office/store','Agent\OfficeController\OfficeController@store')->name('office.store');
Route::get('office/edit/{id}','Agent\OfficeController\OfficeController@edit')->name('office.edit');
Route::post('office/create/{id?}','Agent\OfficeController\OfficeController@update')->name('office.update');
Route::delete('offices/create/{id}','Agent\OfficeController\OfficeController@destroy')->name('office.destroy');

