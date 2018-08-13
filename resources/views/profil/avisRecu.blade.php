@extends('layouts.profilLayout')

@section('contentprofil')
    <div class="row" id="avisRecu" data-page="avisRecu">
        <div class="order-1 order-sm-0 order-md-0 order-lg-0 order-xl-0  col-12 col-xs-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
            @include('profil.leftmenu', ['activeLink' => isset($activeLink) ? $activeLink : 'avisRecu'])
        </div>
        <div class="order-0 order-sm-1 order-md-1 mb-4 order-lg-1 order-xl-1 col-12 col-xs-12 col-sm-12 col-md-8 col-xl-9 col-lg-9">
            <div class="pl-3 d-flex flex-column">
                <div class="d-flex pb-1 border-bottom">
                    <h4>Avis reçus</h4>
                </div>
                <div class="mt-1  d-flex flex-column  mt-3 ">
                    <div class="d-flex p-3 mb-2 justify-content-between border-bottom-0 flex-column flex-md-row flex-lg-rox flex-xl-row mb-2  card-header">
                       <div class="d-flex flex-column">
                           <span class="d-flex text-bold">Synthèse des avis reçus</span>
                           <span class="d-flex">
                               <i class="mt-1   mr-2 text-green fa fa-star"></i> 3/5 - 1 avis</span>
                       </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <span class="d-flex flex-row libeltube justify-content-end"><span class="d-flex ">Parfait</span></span>
                                <span class="tube d-flex bg-white mt-2 ml-2 mr-2"></span>
                                <span class="d-flex text-bold">0</span>
                            </div>
                            <div class="d-flex flex-row">
                                <span class="d-flex flex-row libeltube justify-content-end"><span class="d-flex  ">Très bien</span></span>
                                <span class="tube d-flex bg-white mt-2 ml-2 mr-2"></span>
                                <span class="d-flex text-bold">0</span>
                            </div>
                            <div class="d-flex flex-row">
                                <span class="d-flex flex-row libeltube justify-content-end"><span class="d-flex  ">Bien</span></span>
                                <span class="tube d-flex bg-green mt-2 ml-2 mr-2"></span>
                                <span class="d-flex text-bold">1</span>
                            </div>
                            <div class="d-flex flex-row">
                                <span class="d-flex flex-row libeltube justify-content-end"><span class="d-flex  ">Décevant</span></span>
                                <span class="tube d-flex bg-white mt-2 ml-2 mr-2"></span>
                                <span class="d-flex text-bold">0</span>
                            </div>
                            <div class="d-flex flex-row">
                                <span class="d-flex flex-row libeltube justify-content-end"><span class="d-flex  ">A éviter</span></span>
                                <span class="tube d-flex bg-white mt-2 ml-2 mr-2"></span>
                                <span class="d-flex text-bold">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-2 mt-2">
                        <img src="{{asset('img/tof.jpg')}}" alt="png" class="d-flex imgavis">
                        <div class="d-flex flex-column pb-2 ml-3 border-bottom">
                            <div class="d-flex"><span class="circlered bg-green mt-1 mr-2 "></span> <span class="text-bold"> Bien </span> </div>
                            <span class="d-flex text-bold">Antony: Agréable voyage avec Arno, tres ponctuel</span>
                            <span class="d-flex">Juin 2018</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-2 mt-2">
                        <img src="{{asset('img/tof.jpg')}}" alt="png" class="d-flex imgavis">
                        <div class="d-flex flex-column ml-3 pb-2 border-bottom">
                            <div class="d-flex"><span class="circlered bg-gray mt-1 mr-2 "></span> <span class="text-bold"> Bien </span> </div>
                            <span class="d-flex text-bold">Antony: Agréable voyage avec Arno, tres ponctuel</span>
                            <span class="d-flex">Juin 2018</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-2 mt-2">
                        <img src="{{asset('img/tof.jpg')}}" alt="png" class="d-flex imgavis">
                        <div class="d-flex flex-column ml-3 pb-2 border-bottom">
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
