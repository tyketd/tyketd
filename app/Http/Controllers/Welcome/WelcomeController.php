<?php

namespace App\Http\Controllers\Welcome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class WelcomeController extends Controller
{
    public function index (){
        //dd("hello world ! ");
        return view('Welcome.index');
    }

    public function locale ($locale){

        App::setLocale($locale);
        return redirect()->back();
    }
}
