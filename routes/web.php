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

Route::get('/','Welcome\WelcomeController@index')->name("welcome");
Route::get('/reservation','Reservation\ReservationController@index')->name("reservation");
Route::get('/reservation/{id}','Reservation\ReservationController@detail')->name("detailReservation");

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
Route::get('/dashboard/account', 'Dashboard\DashboardController@account')->name('dashboard.account');
Route::get('/dashboard/account/general', 'Dashboard\DashboardController@account');
Route::post('/dashboard/account/general', 'Dashboard\DashboardController@update')->name('dashboard.updateAccount');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/locale/{locale}', 'Welcome\WelcomeController@locale')->name('locale');


//COLIS
//route for create colis
Route::prefix('colis')->group(function () {
    Route::get('/create','Colis\ColisController@create')->name("createcolis");
    Route::get('/search','Colis\ColisController@search')->name("searchcolis");
});


//PROFIL
Route::prefix('profil')->group(function () {
    Route::get('/','Profil\ProfilController@index')->name("monprofil");
    Route::get('/photo','Profil\ProfilController@photoProfil')->name("photoProfil");
    Route::get('/verification','Profil\ProfilController@verificationProfil')->name("verificationProfil");
    Route::get('/adressePostale','Profil\ProfilController@adressePostale')->name("adressePostale");
    Route::get('/avisRecu','Profil\ProfilController@avisRecu')->name("avisRecu");
    Route::get('/avisLaisse','Profil\ProfilController@avisLaisse')->name("avisLaisse");
});


//ANNONCE
Route::prefix('annonce')->group(function () {
    Route::get('/publier','Annonce\AnnonceController@publier')->name("publierannonce");
});

//TRAJET
Route::prefix('trajet')->group(function () {
    Route::get('/detail/{id}','Trajet\TrajetController@detail')->name("detailTrajet");
});

//Route::resource('reservation', 'ReservationController');

