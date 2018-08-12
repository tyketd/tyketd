@extends('layouts.app')
@section('title')
    Colis
@endsection

@section('content')
    <div id="SearchColis"  data-page="SearchColis">
        <div class="d-flex p-2 bg-gray">
            <div class="container">
                <div class="flex-column paramsearch flex-sm-row flex-md-row flex-lg-row w-50 d-flex">
                    <input type="text" class="form-control d-flex" placeholder="Anvers, Belgique">
                    <a href="#" class="d-flex ml-3 mr-3 bg-gray-active"><i class="fa fa-exchange-alt pt-1 mt-2 mb-2 ml-3 mr-3"  ></i></a>
                    <input type="text" class="form-control d-flex" placeholder="Paris, France">
                    <input type="button" class="ml-3 btn btn-primary bg-blue" value="Recherche">
                </div>
            </div>
        </div>
        <div  class="container pt-3 ">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12  col-md-12 col-lg-3">
                    <div class="d-flex flex-column  bg-gray pt-3 pb-3 pl-4 pr-4">
                        <span class="d-flex text-bold mb-3">Date</span>
                        <input type="date" class="d-flex form-control mb-3">
                        <span class="d-flex pb-4 border-bottom">Heure de départ: 1H - 24H</span>
                        <span class="d-flex text-bold mt-4">Prix</span>
                        <span class="d-flex pb-4 border-bottom">De 18$ à 36$</span>
                        <span class="d-flex mt-4"><input type="checkbox" class="mt-1 mr-1">  Conducteurs qui approuvent automatiquement (18)</span>

                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9">
                   <div class="d-flex flex-column p-2">
                       <div class="d-flex pt-2 pb-2 text-bold">34 trajets Anvers, Belgique - Paris, France disponibles</div>



                       <div class="d-flex flex-column flex-sm-row flex-md-row flex-xl-row">
                           <div class="cardheader w-50 border p-2 d-flex mr-1 flex-column">
                               <div class="d-flex flex-row justify-content-between border-bottom pb-2">
                                   <div class="d-flex flex-column">
                                       <span class="d-flex text-bold">Jeu. 09 août à 12:50</span>
                                       <span class="d-flex"><span>Anvers </span> <i class="ml-2 mr-2 mt-1 fa fa-arrow-right"> </i> <span>Paris</span> </span>
                                   </div>
                                   <h2 class="text-green">25,00 $</h2>
                               </div>
                               <div class="d-flex flex-row   pt-2">
                                   <div class="d-flex flex-row w-100 justify-content-between ">
                                       <div class="d-flex flew-row">
                                           <img src="{{asset('img/tof.jpg')}}" class="d-flex" alt="png">
                                           <span class="d-flex flex-column pl-4 ">
                                               <span class="d-flex text-bold">Namelia</span>
                                               <span class="d-flex">45 ans</span>
                                            </span>
                                       </div>

                                       <div class="d-flex ">
                                           <span class="text-green text-bold pr-3">Bon plan</span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="cardheader border w-50 p-2 d-flex ml-1 flex-column">
                               <div class="d-flex flex-row justify-content-between border-bottom pb-2">
                                   <div class="d-flex flex-column">
                                       <span class="d-flex text-bold">Jeu. 09 août à 12:50</span>
                                       <span class="d-flex"><span>Anvers </span> <i class="ml-2 mr-2 mt-1 fa fa-arrow-right"> </i> <span>Paris</span> </span>
                                   </div>
                                   <h2 class="text-green">25,00 $</h2>
                               </div>
                               <div class="d-flex flex-row pt-2 ">
                                   <div class="d-flex flex-row w-100 justify-content-between ">
                                       <div class="d-flex flew-row">
                                           <img src="{{asset('img/tof.jpg')}}" class="d-flex" alt="png">
                                           <span class="d-flex flex-column pl-4 ">
                                               <span class="d-flex text-bold">Namelia</span>
                                               <span class="d-flex">45 ans</span>
                                            </span>
                                       </div>

                                       <div class="d-flex ">
                                           <span class="text-green text-bold pr-3">Bon plan</span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>



                       <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row pt-3 pb-3 justify-content-between">
                           <span class="d-flex">Durée : 4h0m</span>
                           <div class="d-flex flex-row">
                               <span class="d-flex pt-2">Trier par</span>
                               <div class="d-flex pl-3">
                                   <div class="btn-group bg-white btn-group-toggle" data-toggle="buttons">
                                       <label class="btn btn-secondary active">
                                           <input type="radio" name="options" id="option2" checked autocomplete="off">
                                           <i class="fa fa-clock"></i><i class="fa fa-align-left ml-2"></i>
                                       </label>
                                       <label class="btn btn-secondary ">
                                           <input type="radio" name="options" id="option3" autocomplete="off">
                                           <i class="fa fa-euro-sign pl-3 pr-3"></i>
                                       </label>
                                   </div>
                               </div>
                           </div>
                       </div>

                       {{--1--}}
                       <div class="d-flex flex-column border-top p-3 itemsearch flex-sm-row flex-md-row flex-lg-row">
                           <div class="d-flex flex-column   border-right">
                              <div class="d-flex flex-column blimg">
                                  <div class="d-flex mb-3 flex-row">
                                      <img src="{{asset('img/tof.jpg')}}" alt="" class="imglist d-flex">
                                      <div class="d-flex flex-column ml-3 mt-3">
                                          <span class="d-flex text-bold">Fernando</span>
                                          <span class="d-flex">37 ans</span>
                                      </div>
                                  </div>
                                  <span class="d-flex flex-row"><i class="fa fa-star text-green d-flex m-2"></i> <span class="d-flex pt-1">4/5 - 4 avis</span></span>
                              </div>
                           </div>
                           <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row justify-content-between w-100 pl-2 pr-2 ">
                               <div class="d-flex flex-column">
                                   <span class="text-bold d-flex">Jeu. 09 août à 01:00</span>
                                   <span class="text-bold d-flex">Zaventen <i class="fa fa-arrow-right ml-2 mt-1 mr-2"></i> Garches</span>
                                   <span class="pt-2">Aéroport de Bruxelles</span>
                                   <span class="">Hôpital Raymond-Poincaré AP-HP</span>
                               </div>
                               <div class="d-flex flex-column">
                                   <h2 class="d-flex">36,00 $</h2>
                                   <span class="d-flex">Par place</span>
                                   <span class="d-flex pt-2">
                                       2 places restantes
                                   </span>
                               </div>
                           </div>
                       </div>

                       {{--2--}}
                       <div class="d-flex flex-column itemsearch border-top p-3   flex-sm-row flex-md-row flex-lg-row">
                           <div class="d-flex flex-column   border-right">
                               <div class="d-flex flex-column blimg">
                                   <div class="d-flex mb-3 flex-row">
                                       <img src="{{asset('img/tof.jpg')}}" alt="" class="imglist d-flex">
                                       <div class="d-flex flex-column ml-3 mt-3">
                                           <span class="d-flex text-bold">Yvan</span>
                                           <span class="d-flex">25 ans</span>
                                       </div>
                                   </div>
                                   {{--<span class="d-flex flex-row"><i class="fa fa-star text-green d-flex m-2"></i> <span class="d-flex pt-1">4/5 - 4 avis</span></span>--}}
                               </div>
                           </div>
                           <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row justify-content-between w-100 pl-2 pr-2 ">
                               <div class="d-flex flex-column">
                                   <span class="text-bold d-flex">Jeu. 09 août à 08:00</span>
                                   <span class="text-bold d-flex">Forest paray-Vieille-poste <i class="fa fa-arrow-right ml-2 mt-1 mr-2"></i> Garches</span>
                                   <span class="pt-2">Rue des Alliés, Forest, Belgique</span>
                                   <span class="">RDV à Aéroport de Paris-Orly (ORY), Orly, France: voir avec le conducteur</span>
                               </div>
                               <div class="d-flex flex-column">
                                   <h2 class="d-flex">24,00 $</h2>
                                   <span class="d-flex">Par place</span>
                                   <span class="d-flex pt-2">
                                       4 places restantes
                                   </span>
                               </div>
                           </div>
                       </div>

                       {{--3--}}
                       <div class="d-flex flex-column itemsearch border-top border-bottom p-3   flex-sm-row flex-md-row flex-lg-row">
                           <div class="d-flex flex-column   border-right">
                               <div class="d-flex flex-column blimg">
                                   <div class="d-flex mb-3 flex-row">
                                       <img src="{{asset('img/tof.jpg')}}" alt="" class="imglist d-flex">
                                       <div class="d-flex flex-column ml-3 mt-3">
                                           <span class="d-flex text-bold">Cath</span>
                                           <span class="d-flex">53 ans</span>
                                       </div>
                                   </div>
                                   <span class="d-flex flex-row"><i class="fa fa-star text-green d-flex m-2"></i> <span class="d-flex pt-1">4/5 - 4 avis</span></span>
                               </div>
                           </div>
                           <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row justify-content-between w-100 pl-2 pr-2 ">
                               <div class="d-flex flex-column">
                                   <span class="text-bold d-flex">Jeu. 09 août à 10:00</span>
                                   <span class="text-bold d-flex">Zaventen <i class="fa fa-arrow-right ml-2 mt-1 mr-2"></i> Garches</span>
                                   <span class="pt-2">Aéroport de Bruxelles</span>
                                   <span class="">Hôpital Raymond-Poincaré AP-HP</span>
                               </div>
                               <div class="d-flex flex-column">
                                   <h2 class="d-flex">12,00 $</h2>
                                   <span class="d-flex">Par place</span>
                                   <span class="d-flex pt-2">
                                       2 places restantes
                                   </span>
                               </div>
                           </div>
                       </div>

                       <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row pt-3 justify-content-between">
                           <span class="d-flex text-bold">1 à 10 sur 34 résultats</span>
                           <nav aria-label="Page navigation example d-flex">
                               <ul class="pagination">
                                   <li class="page-item">
                                       <a class="page-link" href="#" aria-label="Previous">
                                           <span aria-hidden="true">&laquo;</span>
                                           <span class="sr-only">Previous</span>
                                       </a>
                                   </li>
                                   <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                   <li class="page-item "><a class="page-link " href="#">2</a></li>
                                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                                   <li class="page-item">
                                       <a class="page-link" href="#" aria-label="Next">
                                           <span aria-hidden="true">&raquo;</span>
                                           <span class="sr-only">Next</span>
                                       </a>
                                   </li>
                               </ul>
                           </nav>
                       </div>

                       <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row mt-1 mb-2 pt-2 p-2 bg-blue justify-content-between">
                           <div class="flex-row d-flex">
                               <i class="d-flex fa fa-envelope m-2"></i>
                               <span class="d-flex text-bold pt-1">Ne passez à côté d'aucune annonce !</span>
                           </div>
                           <a  class="bg-white pl-3 pr-3 pt-1 pb-1 text-black" href="">Créer une alerte</a>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection