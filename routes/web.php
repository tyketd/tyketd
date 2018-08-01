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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
Route::get('/dashboard/account', 'Dashboard\DashboardController@account')->name('dashboard.account');
Route::get('/dashboard/account/general', 'Dashboard\DashboardController@account');
Route::post('/dashboard/account/general', 'Dashboard\DashboardController@update')->name('dashboard.updateAccount');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
