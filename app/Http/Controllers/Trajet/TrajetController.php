<?php

namespace App\Http\Controllers\Trajet;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TrajetController extends Controller
{
    public function detail($id){
        return view('Trajet.detail');
    }
}
