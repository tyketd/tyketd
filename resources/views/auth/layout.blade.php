@extends('layouts.app')

@section('title') Auth @endsection
@section('content')
    <div id="auth" class="pt-4 pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 row hide-tablete hide-mobile">
                    <div class="col-md-6 d-flex flex-column mb-5"><img src="{{asset('img/logincovoiturage.png')}}" class="d-flex" alt="covoiturage">

                         <span class="desc d-flex flex-column   d-flex p-2">
                             <span class="text-bold d-flex">Covoiturage : </span>
                         <span class="d-flex">
                                Lorem ipsum de lor si un poco de la
                            si un de la vie bref cest un lorem ipsum
                            </span>
                         </span>
                    </div>
                    <div class="col-md-6 d-flex flex-column mb-5"><img src="{{asset('img/logintransport.png')}}" alt="Livraison">

                        <span class="desc d-flex flex-column  d-flex p-2">
                            <span class="text-bold d-flex">Transport de colis : </span>
                        <span class="d-flex">
                                Lorem ipsum de lor si un poco de la
                            si un de la vie bref cest un lorem ipsum
                            </span>
                        </span>
                    </div>
                    <div class="col-md-6 d-flex flex-column"><img src="{{asset('img/transportcolis.jpg')}}" alt="securite">
                        <span class="desc d-flex flex-column  d-flex p-2"> <span class="text-bold d-flex">Livraison des colis : </span> <span class="d-flex">
                                Lorem ipsum de lor si un poco de la
                            si un de la vie bref cest un lorem ipsum
                            </span>   </span>
                    </div>
                    <div class="col-md-6 d-flex flex-column"><img src="{{asset('img/securite.png')}}" alt="transport">
                        <span class="desc d-flex flex-column d-flex flex-column d-flex p-2">
                            <span class="text-bold d-flex">Données sécurisées : </span>
                            <span class="d-flex">
                                Lorem ipsum de lor si un poco de la
                            si un de la vie bref cest un lorem ipsum
                            </span> </span>
                    </div>
                </div>
                <div class="col-md-5 col-12 col-sm-12">
                   @yield('authcontent')
                </div>
            </div>
        </div>
    </div>
@endsection
