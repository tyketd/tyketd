<?php

namespace App\Http\Controllers\Colis;

use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use  Barryvdh\DomPDF\Facade as PDF;

class ColisController extends Controller
{
    //
    public function create (){

        return view('colis.createColis');
    }

    public function search (){

        return view('colis.search');
    }

    public function demandeTransport (){


        //PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // pass view file
        $pdf = PDF::loadView('colis.inc._TemplatePdfColis');
        // download pdf
         $pdf->download('pdfview.pdf');
        return view('colis.demandeTransport');
    }
}
