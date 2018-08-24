<?php

namespace App\Http\Controllers\Footer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    
    public function howIswork()
    {
        return view('footer.howIswork');
        
    }
    public function userInformation()
    {
        return view('footer.userInformation');
        
    }

   
}
