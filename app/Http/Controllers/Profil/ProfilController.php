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
    public function photoProfil (){
        return view('profil.photoProfil');
    }
    public function verificationProfil (){
        return view('profil.verificationProfil');
    }
    public function adressePostale (){
        return view('profil.adressePostale');
    }
    public function avisRecu (){
        return view('profil.avisRecu');
    }
    public function avisLaisse (){
        return view('profil.avisLaisse');
    }
}
