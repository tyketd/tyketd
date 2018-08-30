@extends('layouts.app')
@section('title')
    Colis
@endsection

@section('content')
    <div id="DemandeColis"  data-page="DemandeColis">
        <div  class="container pt-3 noprint  ">
            <div class="d-flex flex-column p-2 w-75  m-0 m-sm-0 m-md-auto m-lg-auto">
                <h1 class="d-flex flex-row justify-content-center m-3"><span class="d-flex">Votre envoie</span></h1>
                <div class="d-flex flex-row"><span class="d-flex text-bold">Que voulez-vous envoyer ?</span></div>
                <div id="demandecolisvue">
                    <div class="typeobject d-flex flex-column">
                        <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row">
                            <div class="input-group d-flex ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text libelobj" >Nom de l'objet</span>
                                </div>
                                <input type="text" placeholder="e.g Meuble, Pièce automobile ..." class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            {{--<div class="input-group d-flex btnaddremove">--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<button class="btn btn-outline-secondary bg-blue" type="button">-</button>--}}
                                {{--</div>--}}
                                {{--<label class="label-default pl-3 pt-2  pr-3 mb-0" >X 1</label>--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<button class="btn btn-outline-secondary  bg-blue" type="button">+</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="input-group d-flex ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text libelobj" >Poids (kg)</span>
                            </div>
                            <input type="text" placeholder="Poids unitaire de l'objet" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row">
                            <div class="input-group d-flex ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text libelobj" >Dimensions (cm)</span>
                                </div>
                                <input type="text" placeholder="Longeur" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group d-flex ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text" >X</span>
                                </div>
                                <input type="text" placeholder="Largeur" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group d-flex ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text" >X</span>
                                </div>
                                <input type="text" placeholder="Hauteur" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-2 mb-3">
                        <a href="#" class="d-flex flex-row text-bold">
                            <span class="d-flex bg-blue p-2 text-white">+</span>
                            <span class="d-flex p-2"> Ajouter un autre type d'objet</span>
                        </a>
                    </div>
                    <div class="d-flex flex-column mt-2 mb-3">
                        <span class="d-flex text-bold">Adresse d'enlèvement</span>
                        <div class="input-group d-flex ">
                            <input type="text" placeholder="e.g 10 Avenue des Champs-Elysées, 75008 Paris" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group flex-row d-flex">
                            <div class="input-group-prepend w-100 d-flex">
                                <span class="input-group-text w-100 d-flex flex-sm-row flex-md-row flex-lg-row flex-column" >
                                    <div class="d-flex flex-row w-50">
                                        <input type="radio" class="m-1" name="enlevement">
                                        <span class="d-flex">Enlèvement au pied du véhicule</span>
                                    </div>
                                   <div class="d-flex flex-row w-50">
                                       <input type="radio" class="m-1"  name="enlevement">
                                       <span class="d-flex">Enlèvement à domicile/en entrepot</span>
                                   </div>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex flex-column mt-2 mb-3">
                        <span class="d-flex text-bold">Adresse de livraison</span>
                        <div class="input-group d-flex ">
                            <input type="text" placeholder="e.g 10 Avenue des Champs-Elysées, 75008 Paris" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group flex-row d-flex">
                            <div class="input-group-prepend w-100 d-flex">
                                <span class="input-group-text w-100 d-flex flex-sm-row flex-md-row flex-lg-row flex-column" >
                                    <div class="d-flex flex-row w-50">
                                        <input type="radio" class="m-1" name="enlevement">
                                        <span class="d-flex">Enlèvement au pied du véhicule</span>
                                    </div>
                                   <div class="d-flex flex-row w-50">
                                       <input type="radio" class="m-1"  name="enlevement">
                                       <span class="d-flex">Enlèvement à domicile</span>
                                   </div>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex flex-column mt-2 mb-3">
                        <span class="d-flex text-bold">Date de livraison (Optionel) </span>
                        <div class="input-group d-flex ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text libelobj" >A livrer avant</span>
                            </div>
                            <input type="date" placeholder="(Optionel)" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a  class="mt-2" href="#"  data-toggle="modal" data-target="#FormRetraitColisModalLabel">
                            <i class="fa fa-address-card mt-1 mr-2"></i>Qui retirera votre colis
                        </a>
                    </div>
                </div>
                <div class="d-flex">
                    <div id="map">
                        <img src="{{asset('img/map.png')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="d-flex flex-column  mb-2 mt-2">
                    <input type="button" id="btnestimateprise" class="btn-primary btn w-100" value="Estimer le prix">
                </div>
                <div class="estimateprix  w-100 flex-column">
                    <span class="d-flex mt-3 text-bold">Prix estmé</span>
                    <span class="d-flex text-blue">Les commandes similaires coutent entre 30$ et 72$</span>
                    <span class="d-flex text-blue">Le prix arrêté est de 55$</span>
                    <span class="d-flex mt-4 text-bold">Combien sohaitez-vous payer pour la livraison ?</span>
                    <span class="d-flex text-blue">Maximisez vos chance de trouver un voyagé en augmentant votre prix</span>
                    <div class="input-group ">
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>

                    </div>
                    <span class="d-flex mt-3 text-bold">Description détaillé</span>
                    <textarea name="descrition" class="w-100" id="" cols="30" rows="3" placeholder="Merci de mattre plus de details sur votre demande notamment sur votre disponibilité"></textarea>
                    <div class="d-flex flex-column  mb-2 mt-2">
                        <input type="button" class="btn-primary btn w-100 bg-yellow" id="btnPosteDemande" value="Poster ma demande d'espédition">
                    </div>
                </div>
            </div>

        </div>
        @include('colis.inc._FormulaireRetraitColis')
        @include('colis.inc._TemplatePdfColis')
    </div>

@endsection