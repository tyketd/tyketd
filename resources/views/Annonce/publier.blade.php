@extends('layouts.app')
@section('title')
    Annonce
@endsection

@section('content')
   <div id="PublierAnnonce" data-page="PublierAnnonce" class=" pt-4 pb-4" >
       <div class="container ">
           <div class="d-flex flex-column ">
               <h4>Publier une annoce</h4>
               <div class="d-flex flex-row mt-3 stepper ">
                  <div class="d-flex stepItem pt-3 pb-3">
                      <span class="divider"></span>
                      <span class="number" id="activestep1">1</span>
                      <span class="textd">Votre ittinéraire</span>
                  </div>
                  <div class="stepItem2"  style="display: none">
                      <div class="d-flex stepItem  pt-3 pb-3 ">
                          <span class="divider"></span>
                          <span class="number">2</span>
                          <span class="textd">Votre annonce</span>
                      </div>
                  </div>
               </div>
               <div class="d-flex row">
                   @include('Annonce.publier.step2')
                   @include('Annonce.publier.step1')
                   <div class="col-md-6  col sm-12 col-lg-6  pr-lg-0 pr-md-0 pr-xl-0">
                       <div class="d-flex flex-column  border">
                           <div class="head d-flex p-2">
                               <h6>Votre itineraire</h6>
                           </div>
                           <div class="contentA p-2">
                               <img src="{{asset('img/map.PNG')}}" class="w-100" alt="">
                           </div>

                           <div  id="nextStapMap" style="display: none">
                               <div  class="d-flex mt-3 p-2 flex-column">
                                   <div class="d-flex flex-row text-bold">
                                       <span class="d-flex">Knocke-Heist</span>
                                       <i class="d-flex fa fa-arrow-right ml-2 mt-1 mr-2"></i>
                                       <span class="d-flex">Anvers</span>
                                   </div>
                                   <div class="d-flex flex-row justify-content-between">
                                       <span class="d-flex">Aller : </span>
                                       <span class="d-flex text-bold">Lun. 13 août à 09:00</span>
                                   </div>
                                   <div class="d-flex flex-row justify-content-between">
                                       <span class="d-flex">Retour : </span>
                                       <span class="d-flex text-bold">Mar. 14 août à 19:00</span>
                                   </div>
                                   <div class="d-flex mt-3 flex-row justify-content-between">
                                       <span class="d-flex">Dstance : </span>
                                       <span class="d-flex text-bold">92 km</span>
                                   </div>
                                   <div class="d-flex flex-row justify-content-between">
                                       <span class="d-flex">Durée estimée : </span>
                                       <span class="d-flex text-bold">1h20m</span>
                                   </div>
                                   <div class="d-flex flex-row justify-content-between">
                                       <span class="d-flex">Emissions CO2 : </span>
                                       <span class="d-flex text-bold">30kg</span>
                                   </div>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="modal fade" id="Modalpublierannonce" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-body pl-0 pt-0 pr-0 pb-3">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                       <div class="d-flex flex-column">
                           <div class="d-flex bg-gray p-2 flex-column justify-content-center">
                               <span class="d-flex numberchance mt-4 ml-auto pl-4 mr-auto bg-green text-bold">1.7</span>
                            <span class="d-flex text-bold text-center pt-3 ">Vous avez 1.7 fois plus de chance de trouver des passagers en ajoutant une
                           étape.</span>
                           </div>
                           <span class="d-flex p-2 text-left">
                               une étape est une ville où vous pouvez déposer ou récupérer des passagers pendant votre trajet
                           </span>
                            <span class="d-flex p-2">
                              -  Choisissez une ville importante.
                           </span>
                            <span class="d-flex p-2">
                              -  Choisissez un endroit facilement accessible pour les passagers (comme une gare ou un arrêt de transport
                                en commun)
                           </span>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </div>
@endsection