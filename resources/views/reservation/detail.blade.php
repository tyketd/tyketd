@extends('layouts.app')
@section('title')
    Reservation
    @endsection

@section('content')
    <div id="DetailReservation" class="container pt-3" data-page="DetailReservation">
        <div class="row pb-3">
            <a href="{{ route('reservation') }}"class="col"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Retour a vos reservtions </a>
        </div>
        <div class="row border">
            <div class="col col-sm-9 border-right pl-4 text-bold mt-1 mb-1">
                Votre réservation
            </div>
            <div class="col col-sm-3 text-green text-bold  mt-1 mb-1">
                CONFIRMEE
            </div>
        </div>
        <div class="row border">
            <div class="col-12 col-xs-12 col-sm-12 pt-3 pb-3 d-flex flex-column">
                <div class="d-flex flex-row pl-2 pt-1 pb-1  bg-green">Vayage fait. Nous avons versé votre paiement au conducteur.</div>
            </div>
            <div class="col-12  col-xs-12  col-sm-12 ">
                <div class="border-top border-right d-flex flex-row">
                    <div class="pt-2 pb-2 pl-4">Orléans <i class="fa fa-arrow-right" aria-hidden="true"></i> Gand</div>
                    <a href="#" class="pl-2 pb-2 pt-2 pr-4 ml-auto">Voir l'annonce</a>
                </div>
            </div>
            <div class="col-12   pb-3  col-sm-12 ">
                <div class="border  d-flex flex-row">
                    <div class="row pr-0  col-12 col-sm-12">
                        <div class="col-12 col-xs-12   col-sm-9 d-flex flex-column">
                            <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row border-bottom p-2">
                                <span class="d-flex w-25">Lieu de départ</span>
                                <span class="d-flex   text-bold">Hotel Bristal international Hotel, Edegmsestraat, Mortel, Bel</span>
                            </div>
                            <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row border-bottom p-2">
                                <span class="d-flex w-25">Lieu d'arrivée</span>
                                <span class="d-flex text-bold">Orléans, France</span>
                            </div>
                            <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row border-bottom p-2">
                                <span class="d-flex w-25">Date</span>
                                <span class="d-flex  text-bold">dim, 03 juin</span>
                            </div>
                            <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row border-bottom p-2">
                                <span class="d-flex w-25">Heure de départ</span>
                                <span class="d-flex  text-bold">dim, 03 juin à 13:30</span>
                            </div>
                            <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row border-bottom p-2">
                                <span class="d-flex w-25">Places</span>
                                <span class="d-flex   text-bold">1 place réservée</span>
                            </div>
                            <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row border-bottom p-2">
                                <span class="d-flex w-25">Montant</span>
                                <span class="d-flex   text-bold">37,00 $</span>
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-3  pl-2 pt-2 pr-0">
                            <div class="bg-gray d-flex flex-column p-2">
                                <span class="d-flex text-bold">Description du trajet</span>
                                <span class="d-flex "><i>"Je ne fais pas de détours, je n'attends pas et il n'ya a a place que des petits bagages"</i></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col pb-3 col-sm-12  ">
                <div class="row col pl-0 col-sm-12 mr-0 ml-0 pr-0">
                    <div class="col col-sm-6 col-xs-12 pl-0 pr-0 d-flex flex-column">
                        <div class="d-flex pt-2 pb-2 pl-4 text-bold border-right border-top">
                            Conducteur
                        </div>
                        <div class="d-flex flex-row border pt-2 pl-4 pb-5">
                            <img src="{{asset('img/tof.jpg')}}"  alt="img" class="d-flex img-circle imagedesc circlered">
                            <a href="#" class="d-flex pl-4">Guy (54ans)</a>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-xs-12 pl-0 pr-0 d-flex flex-column">
                        <div class="d-flex pt-2 pb-2 pl-4 text-bold border-left border-top">
                            Véhicule
                        </div>
                        <div class="d-flex flex-row border pt-2 pl-4 pb-5">
                            <img src="{{asset('img/tof.jpg')}}"  alt="img" class="d-flex imagedesc  ">
                            <div   class="d-flex flex-column pl-4">
                                <span class="d-flex text-bold ">Mercedes-benz E 220</span>
                                <span class="d-flex">Coulleur : Gris foncé</span>
                                <span class="d-flex">Immatriculation : CT-095-CB</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 border-left border-bottom border-right">
            <div class="col-12 col-sm-12  col-xs-12 border-bottom text-bold ">
                Conditions d'annulation :
            </div>
            <div class="col-12 col-sm-12 col-xs-12">
                <ul>
                    <li>Lorem ipsum de lor</li>
                    <li>u test dannulation </li>
                    <li>si le user est mal coifé</li>
                    <li>Si le user fait les brits </li>
                </ul>
            </div>
        </div>
    </div>
@endsection