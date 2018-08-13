<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    //
    public function index (){

        return view('profil.index');
    }
}
