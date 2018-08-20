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
                      <span class="number">1</span>
                      <span class="textd">Votre ittinéraire</span>
                  </div>
                   <div class="d-flex stepItem pt-3 pb-3 hide">
                       <span class="divider"></span>
                       <span class="number">2</span>
                       <span class="textd">Votre annonce</span>
                   </div>
               </div>
               <div class="d-flex row">
                   <div class="col-md-6 col sm-12  col-lg-6 pl-lg-0 pl-md-0 pl-xl-0">
                       <div class="d-flex flex-column mb-3  border">
                           <div class="d-flex flex-column ">
                               <div class="head d-flex p-2">
                                   <h6>Itineraire</h6>
                               </div>
                               <div class="contentA p-2  pb-3 d-flex flex-column border-bottom-0 card-header">
                                   <label for="initiallieu">D'où partez-vous ?</label>
                                   <input type="text" class="form-control d-flex mb-2" placeholder="" name="initiallieu">
                                   <label for="destination">Où allez-vous ?</label>
                                   <input type="text" class="form-control d-flex " placeholder="" name="destination">
                                   <label for="moytransport">Quel est le moyen de transport ?</label>
                                   <select name="moytransport" id="CbbMoyen" class="d-flex form-control ">
                                       <option value=""></option>
                                       <option value="Train">Train</option>
                                       <option value="Voiture">Voiture</option>
                                       <option value="Personnelle">Personnelle</option>
                                       <option value="Covoiturage">Covoiturage</option>
                                       <option value="Avion">Avion</option>
                                       <option value="Bateau">Bateau</option>
                                   </select>
                                   <div class="w-100" style="display: none" id="blockTrain">
                                       <div class="d-flex flex-column mt-5"  >
                                           <label class="desc" for="train">Augmentez vos chance de prendre plusieurs colis en indiquant
                                               les gars ou vous ferez des echances de train ou des escales ?</label>
                                           <input type="text" class="form-control d-flex " placeholder="" name="train">
                                       </div>
                                   </div>
                                   <div class="w-100" style="display: none" id="blockVoiture">
                                       <div class="d-flex flex-column mt-5 "  >
                                           <label class="desc" for="voiture">Augmentez vos chances de  prendre plusieurs colis en
                                               indiquant les detaours
                                               et les arrets que vous allez faire ?</label>
                                           <input type="text" class="form-control d-flex " placeholder="" name="voiture">
                                       </div>
                                   </div>
                                   <div class="d-flex mt-2 flex-row mt-5">
                                       <span class="d-flex">Etapes </span> <a href=""  data-toggle="modal" data-target="#Modalpublierannonce" class="number ml-2 mt-1 d-flex">?</a>
                                   </div>
                                   <span class="desc d-flex">
                                       Augmentez votre chances de remplir votre véhicule en ajoutant des étapes où vous pouvez
                                       déposer et récupérer des passages:
                                   </span>
                                   <input type="text" class="form-control">

                               </div>
                           </div>
                       </div>
                       <div class="d-flex flex-column mb-3  border">
                           <div class="d-flex flex-column ">
                               <div class="head d-flex p-2">
                                   <div class="d-flex flex-row w-100 justify-content-between">
                                       <h6 class="d-flex">Date et horaire</h6>
                                       <h6 class="d-flex"><input type="checkbox" checked class="mt-1 mr-1"> Aller-retour</h6>
                                   </div>
                               </div>
                               <div class="contentA p-2  pb-3 d-flex flex-column border-bottom-0 card-header">
                                   <label for="date">Date de l'aller</label>
                                   <div class="d-flex flex-row">
                                       <input type="date" class="d-flex  form-control">
                                       <select name="heure" id="" class="d-flex  ml-2 from-control">
                                           @for ($i = 1; $i < 25; $i++)
                                               <option value="{{$i}}">{{$i}}</option>
                                           @endfor
                                       </select>
                                       <select name="minute" id="" class="d-flex  ml-2 from-control">
                                           @for ($i = 0; $i < 60; $i++)
                                               <option value="{{$i}}">{{$i}}</option>
                                           @endfor
                                       </select>
                                   </div>
                                   <label for="destination">Date du retour</label>
                                   <div class="d-flex flex-row">
                                       <input type="date" class="d-flex  form-control">
                                       <select name="heure" id="" class="d-flex  ml-2 from-control">
                                           @for ($i = 1; $i < 25; $i++)
                                               <option value="{{$i}}">{{$i}}</option>
                                           @endfor
                                       </select>
                                       <select name="minute" id="" class="d-flex  ml-2 from-control">
                                           @for ($i = 0; $i < 60; $i++)
                                               <option value="{{$i}}">{{$i}}</option>
                                           @endfor
                                       </select>
                                   </div>

                               </div>
                           </div>
                       </div>
                       <div class="d-flex flex-row justify-content-end mb-2">
                           <input type="button" class=" btn btn-primary" value="Continuer">
                       </div>
                   </div>
                   <div class="col-md-6 hide-mobilbe col sm-12 col-lg-6  pr-lg-0 pr-md-0 pr-xl-0">
                       <div class="d-flex flex-column  border">
                           <div class="head d-flex p-2">
                               <h6>Votre itineraire</h6>
                           </div>
                           <div class="contentA p-2">
                               <img src="{{asset('img/map.PNG')}}" class="w-100" alt="">
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