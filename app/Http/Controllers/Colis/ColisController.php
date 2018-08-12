<?php

namespace App\Http\Controllers\Colis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColisController extends Controller
{
    //
    public function create (){

        return view('colis.demandeColis');
    }

    public function search (){

        return view('colis.search');
    }
}
