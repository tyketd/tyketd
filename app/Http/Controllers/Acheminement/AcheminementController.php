<?php

namespace App\Http\Controllers\Acheminement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcheminementController extends Controller
{
    //
    public function index (){
        return view('Acheminement.index');
    }
}
