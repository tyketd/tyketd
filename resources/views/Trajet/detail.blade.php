@extends('layouts.app')
@section('title')
    Trajet
@endsection

@section('content')
    <div id="TrajetDetail"  data-page="TrajetDetail">
        <div class="d-flex p-2 bg-gray">
            <div class="container">
                <div class="flex-column paramsearch flex-sm-row flex-md-row flex-lg-row w-50 d-flex">
                    <input type="text" class="form-control d-flex" placeholder="Anvers, Belgique">
                    <a href="#" class="d-flex ml-3 mr-3 bg-gray-active"><i class="fa fa-exchange-alt pt-1 mt-2 mb-2 ml-3 mr-3"  ></i></a>
                    <input type="text" class="form-control d-flex" placeholder="Paris, France">
                    <input type="button" class="ml-3 btn btn-primary bg-blue" value="Rechercher">
                </div>
            </div>
        </div>
        <div  class="container pt-3 ">
           <div class="d-flex flex-column">
               <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row justify-content-between">
                   <div class="d-flex flex-row text-bold pl-2">
                       <span class="d-flex">Woluwe-Saint-Pierre</span>
                       <i class="d-flex fa fa-arrow-right mt-1 ml-2 mr-2"></i>
                       <span class="d-flex mr-2">Paris</span>
                       <a href="#" class="">Voir le trajet</a>
                   </div>
                   <span class="d-flex text-small">Annonce publiée le 07/07/2018 _ Vue 4 fois</span>
               </div>
               <div class="d-flex mt-2 row">
                   <div class="col-xs-12 col sm-12 col-md-8 col-lg-8 col-xl-8">
                       <div class="border d-flex p-2 block1 m-2 flex-column">
                           <div class="d-flex flex-column flex-md-row flex-lg-row flex xl-row">
                               <span class="d-flex title text-black-50">Départ</span>
                               <div class="flex-row d-flex">
                                   <i class="mt-1 d-flex mr-2 fa fa-dot-circle"></i>
                                   <a class="d-flex">Stockel Square Shopping Centrer</a>
                               </div>
                           </div>
                           <div class="d-flex mt-2 flex-column flex-md-row flex-lg-row flex xl-row">
                               <span class="d-flex title text-black-50">Arivée</span>
                               <div class="flex-row d-flex">
                                   <i class="mt-1 d-flex mr-2 fa fa-dot-circle"></i>
                                   <a class="d-flex">Gare du Nord</a>
                               </div>
                           </div>
                           <div class="d-flex mt-2 flex-column flex-md-row flex-lg-row flex xl-row">
                               <span class="d-flex title text-black-50">Date de départ</span>
                               <div class="flex-row d-flex">
                                   <i class="mt-1 d-flex mr-2 fa fa-calendar"></i>
                                   <span class="d-flex text-bold">Demain à 10:00</span>
                               </div>
                           </div>
                           <div class="d-flex mt-2 mb-2 flex-column flex-md-row flex-lg-row flex xl-row">
                               <span class="d-flex title text-black-50">Options</span>
                               <div class="flex-row d-flex">
                                   <i class="mt-1 d-flex mr-2 fa fa-venus-double"></i>
                                   <span class="d-flex text-bold">2 max. à l'arrière</span>
                                   <a href="#" class="d-flex ml-2 circlelink">?</a>
                               </div>
                           </div>
                           <div class="alert alert-primary d-flex flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row mt-3 mb-0" role="alert">
                               <img src="{{asset('img/tof.jpg')}}" alt="IMG trajet" class="d-flex mr-2">
                               <div class="d-flex ml-2 flex-column">
                                   <span class="d-flex text-bold">Orphelie</span>
                                   <span class="d-flex mt-2">
                                       je suis une jeune femme de 24ans et je vais rejoindre une amie qui habite dans les rue de bagdad <br>
                                       je sohaite partager mon trajet avec des gens ponctuels et respecteux
                                   </span>
                                   <div class="d-flex mt-3">
                                       <a type="button" class="btn btn-primary bg-blue"  data-toggle="modal" data-target="#contactConducteurModalLabel">
                                           <i class="fa fa-comments mt-1 mr-2"></i> Contactez le conducteur
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="d-flex mt-3 flex-column p-2  mb-4 block2">
                           <div class="d-flex border p-2">
                               <h4>Itinéraire et remplissage du véhicule</h4>
                           </div>
                           <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row">
                               <div class="d-flex flex-column  border-right">
                                   <span class="d-flex text-bold pl-2  pr-5 pb-2 pt-2 eltbl2-1">Wolume-Saint-Pierre</span>
                                   <span class="eltbl2-2  d-flex pl-2  pt-4 pr-5 border pb-4">10:00, Paris</span>
                               </div>
                               <div class="d-flex flex-column  border-right">
                                   <span class="d-flex text-bold eltbl2-1 pl-3 pr-3 pt-2 pb-2"><i class="d-flex fa fa-user"></i></span>
                                   <span class="eltbl2-2 border-top  alert mb-0 alert-primary d-flex flex-column">
                                       <img src="{{asset('img/tof.jpg')}}" alt="image utilisateur">
                                       <span class="d-flex text-bold">Ophelie <br> 26 ans</span>
                                   </span>
                               </div>
                               <div class="d-flex flex-column border-right flex-fill">
                                   <span class="d-flex text-bold eltbl2-1 pl-3 pr-3 pt-2 pb-2"><i class="d-flex fa fa-wheelchair"></i></span>
                                   <span class="eltbl2-2 border-top pl-3 pr-3 pt-2 pb-2 border-bottom  d-flex flex-column">

                                   </span>
                               </div>
                               <div class="d-flex flex-column border-right flex-fill">
                                   <span class="d-flex text-bold eltbl2-1 pl-3 pr-3 pt-2 pb-2"><i class="d-flex fa fa-wheelchair"></i></span>
                                   <span class="eltbl2-2 border-top pl-3 pr-3 pt-2 pb-2 border-bottom  d-flex flex-column">

                                   </span>
                               </div>
                               <div class="d-flex flex-column  flex-fill">
                                   <span class="d-flex text-bold eltbl2-1 pl-3 pr-3 pt-2 pb-2"><i class="d-flex fa fa-wheelchair"></i></span>
                                   <span class="eltbl2-2 border-right border-top pl-3 pr-3 pt-2 pb-2 border-bottom  d-flex flex-column">

                                   </span>
                               </div>
                           </div>
                           <div class="d-flex-flex-column border-bottom border-left border-right">
                               <span class="d-flex ml-3">-- 13:40 </span>
                               <span class="d-flex ml-3">(Horaire d'arrivé) </span>
                           </div>
                       </div>
                       @include('Trajet.inc.chatTrajet')
                   </div>
                   <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                       <div class="d-flex flex-column mb-3">
                           <div class="d-flex flex-column mt-2 border mb-3">
                               <div class="d-flex flex-row p-3 justify-content-between border-bottom ">
                                   <span class="d-flex pt-2">Prix par coli</span>
                                   <h4 class="d-flex pt-1">13,00 $</h4>
                               </div>
                               <div class="d-flex flex-column p-3 justify-content-center">
                                   <span class="d-flex text-center text-black-50 flex-row justify-content-center">
                                       <span class="d-flex">Colis sur ce trajet</span></span>
                                   <div class="d-flex flex-row justify-content-center">
                                       <i class="d-flex fa fa-wheelchair m-2"></i>
                                       <i class="d-flex fa fa-wheelchair m-2"></i>
                                       <i class="d-flex fa fa-wheelchair m-2"></i>
                                   </div>
                                   <div class="d-flex flex-row  justify-content-center">
                                       <h2 class="d-flex">9</h2>
                                       <span class="d-flex ml-2 mt-2 text-black-50">colis restantes</span>
                                   </div>
                               </div>
                           </div>
                           <div class="d-flex mb-3">
                               <select name="" id="" class="form-control w-75 m-auto">
                                   <option value="1">1 place</option>
                                   <option value="2">2 places</option>
                                   <option value="3">3 places</option>
                                   <option value="4">4 places</option>
                               </select>
                           </div>
                           <div class="d-flex p-3 mb-3">
                               <input type="checkbox" class="mr-2">
                               <span class="ml-2">
                                   J'accepte les <a href="#" class="ml-2">Conditions Générales </a> applicables à ce trajet et la   <a
                                           href="#" class="ml-2">Politique de confidentialité.</a>
                               </span>
                           </div>
                          <div class="d-flex mb-3 pb-3 border-bottom pl-3 pr-3">
                              <a href="#" type="button" class="w-100 btn btn-lg bg-orange  ">Envoyer une demande </a>
                          </div>
                           <div class="d-flex border-top flex-column">
                               <span class="p-3 text-bold">Conducteur</span>
                               <div class="d-flex flex-column border p-3 blockpart2">
                                   <div class="d-flex flex-row mb-2">
                                       <img src="{{asset('img/tof.jpg')}}" alt="" class="profil d-flex mr-2">
                                       <span class="d-flex ml-2 mt-3 text-bold">Ophelie <br> 26ans </span>
                                   </div>
                                   <div class="d-flex flex-row mb-2">
                                       <i class="d-flex mt-1 mr-2 fa fa-star text-green"></i>
                                       <span class="d-flex ml-2">5/5    - 6 avis</span>
                                   </div>
                                   <span class="d-flex mb-2">Conduite : bonne -- 3/3</span>
                                   <div class="d-flex flex-row">
                                       <i class="d-flex m-2 fa fa-comment"></i>
                                       <i class="d-flex m-2 fa fa-smoking"></i>
                                       <i class="d-flex m-2 fa fa-calendar-times"></i>
                                       <i class="d-flex m-2 fa fa-music"></i>
                                   </div>
                                   <div class="d-flex flex-row mt-4 text-green">
                                       <i class="d-flex mt-1 mr-2 fa fa-check "></i>
                                       <span class="d-flex ml-2">Téléphone vérifié</span>
                                   </div>
                                   <div class="d-flex flex-row pb-3 border-bottom text-green">
                                       <i class="d-flex mt-1 mr-2 fa fa-check "></i>
                                       <span class="d-flex ml-2">E-mail vérifié</span>
                                   </div>
                                   <span class="d-flex mt-3 mb-2 text-bold">Avis</span>
                                   <div class="avis mt-2 d-flex flex-column pb-3 border-bottom">
                                       <div class="d-flex flex-row">
                                           <div class="d-flex">
                                               <img src="{{asset('img/tof.jpg')}}" alt="" class=" ">
                                           </div>
                                           <div class="d-flex flex-column ml-3 ">
                                               <div class="d-flex flex-row">
                                                   <span class="circlegreen mt-1 bg-green mr-2 d-flex"></span>
                                                   <span class="d-flex text-bold">Parfait</span>
                                               </div>
                                           <span  ><span class="mr-2 text-bold">Louise : </span> Super convoit, rien a redire
                                           je conseille ! Orphelie est tres agréable !</span>
                                               <span class="d-flex text-small text-black-50">mai 2018</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="avis mt-2 d-flex flex-column pb-3 border-bottom">
                                      <div class="d-flex flex-row">
                                          <div class="d-flex">
                                              <img src="{{asset('img/tof.jpg')}}" alt="" class=" ">
                                          </div>
                                          <div class="d-flex flex-column ml-3 ">
                                              <div class="d-flex flex-row">
                                                  <span class="circlegreen mt-1 bg-green mr-2 d-flex"></span>
                                                  <span class="d-flex text-bold">Joel</span>
                                              </div>
                                           <span  ><span class="mr-2 text-bold">Louise : </span> Super convoit, rien a redire
                                           je conseille ! Orphelie est tres agréable !</span>
                                              <span class="d-flex text-small text-black-50">mai 2018</span>
                                          </div>
                                      </div>
                                       <a href="#" class="d-flex mt-2">Voir tous les avis</a>
                                   </div>
                                   <span class="d-flex text-bold mt-3 mb-3">Activité</span>
                                   <span class="d-flex mb-3">Annonces publiées : 5</span>
                                   <span class="d-flex mb-3">Membre depuis : Janv. 2007</span>
                                   <a href="#" class="d-flex mb-3">Voir le profil public</a>
                                   <a href="#" class="d-flex mt-3 mb-1">Signaler ce membre</a>
                               </div>


                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        @include('Trajet.inc.contactConducteur')
    </div>

@endsection