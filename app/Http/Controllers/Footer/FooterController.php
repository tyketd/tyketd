<?php

namespace App\Http\Controllers\Footer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    
    public function howIswork()
    {
        return view('footer.howIsWorks');
        
    }
    public function userInformation()
    {
        return view('footer.userInformation');
        
    }

   
}
