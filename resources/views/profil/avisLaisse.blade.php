@extends('layouts.profilLayout')

@section('contentprofil')
    <div class="row" id="avisLaisse" data-page="avisLaisse">
        <div class="order-1 order-sm-0 order-md-0 order-lg-0 order-xl-0  col-12 col-xs-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
            @include('profil.leftmenu', ['activeLink' => isset($activeLink) ? $activeLink : 'avisLaisse'])
        </div>
        <div class="order-0 order-sm-1 order-md-1 mb-4 order-lg-1 order-xl-1 col-12 col-xs-12 col-sm-12 col-md-8 col-xl-9 col-lg-9">
            <div class="pl-3 d-flex flex-column">
                <div class="d-flex pb-1 border-bottom">
                    <h4>Avis laissés</h4>
                </div>
                <div class="mt-1  d-flex flex-column  mt-3 ">
                    <div class="d-flex flex-row mb-2 mt-2">
                        <img src="{{asset('img/tof.jpg')}}" alt="png" class="d-flex imgavis">
                        <div class="d-flex flex-column w-75 pb-2 ml-3 border-bottom">
                            <div class="d-flex"><span class="circlered bg-green mt-1 mr-2 "></span> <span class="text-bold"> Bien </span> </div>
                            <span class="d-flex text-bold ">POur Antony: Anthony est très sympa, trèes ponctuel il conduit très prudement
                            . jai passé un super moment</span>
                            <span class="d-flex">Juin 2018</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-2 mt-2">
                        <img src="{{asset('img/tof.jpg')}}" alt="png" class="d-flex imgavis">
                        <div class="d-flex flex-column w-75 ml-3 pb-2 border-bottom">
                            <div class="d-flex"><span class="circlered bg-gray mt-1 mr-2 "></span> <span class="text-bold"> Bien </span> </div>
                            <span class="d-flex text-bold">Antony: Agréable voyage avec Arno, tres ponctuel</span>
                            <span class="d-flex">Juin 2018</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-2 mt-2">
                        <img src="{{asset('img/tof.jpg')}}" alt="png" class="d-flex imgavis">
                        <div class="d-flex flex-column w-75 ml-3 pb-2 border-bottom">
                            <div class="d-flex"><span class="circlered bg-green mt-1 mr-2 "></span> <span class="text-bold"> Bien </span> </div>
                            <span class="d-flex text-bold">Antony: Agréable voyage avec Arno, tres ponctuel</span>
                            <span class="d-flex">Juin 2018</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
