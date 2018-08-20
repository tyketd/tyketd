<?php

namespace App\Http\Controllers\Annonce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnonceController extends Controller
{
    //
    public function publier (){
        return view('Annonce.publier');
    }
}
