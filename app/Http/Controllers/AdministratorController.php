<?php

namespace App\Http\Controllers;

use App\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function show(Administrator $administrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrator $administrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrator $administrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrator $administrator)
    {
        //
    }

    /**
     * cette fonction permet d'afficher le formulaire de creation de compte.
     *la route etant definit dans le web.php : Route::get('register', [
                                                                'as' => 'register_path',
                                                                'uses' => 'AdministratorController@getRegisterForm'
                                                                ]);

     */
    public function getRegisterForm()
    {
        return view('registerAndLogin.register');
    }

    /**
     * cette fonction permet d'afficher le formulaire de connexion.
     *la route etant definit dans le web.php : Route::get('login', [
                                                                'as' => 'register_path',
                                                                'uses' => 'AdministratorController@getLoginForm'
                                                                ]);
     */
    public function getLoginForm()
    {
        return view('registerAndLogin.login');
    }
}
