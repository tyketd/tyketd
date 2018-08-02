<?php

namespace App\Http\Controllers\Welcome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index (){
        return view('Welcome.index');
    }
}
