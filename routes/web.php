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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('register', [
    'as' => 'register_path',
    'uses' => 'AdministratorController@getRegisterForm'
]);
Route::get('login', [
    'as' => 'login_path',
    'uses' => 'AdministratorController@getLoginForm'
]);
Route::get('privacy', [
    'as' => 'privacy_path',
    'uses' => 'AdministratorController@getLoginForm'
]);