@extends('layouts.app')
@section('title')
    Colis
@endsection

@section('content')
    <div id="SearchColis"  data-page="SearchColis">
        <div class="d-flex p-2 bg-gray">
            <div class="container">
                <div class="flex-row w-50 d-flex">
                    <input type="text" class="form-control d-flex" placeholder="Anvers, Belgique">
                    <a href="#" class="d-flex ml-3 mr-3 bg-gray-active"><i class="fa fa-exchange-alt pt-1 mt-2 mb-2 ml-3 mr-3"  ></i></a>
                    <input type="text" class="form-control d-flex" placeholder="Paris, France">
                    <input type="button" class="ml-3 btn btn-primary bg-blue" value="Recherche">
                </div>

            </div>
        </div>
        <div  class="container pt-3 ">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3">
                    Date
                </div>
                <div class="col-12 col-sm-12 col-md-9">
                   <div class="d-flex flex-column p-2">
                       <div class="d-flex pt-2 pb-2 text-bold">34 trajets Anvers, Belgique - Paris, France disponibles</div>
                       <div class="d-flex flex-column flex-sm-row flex-md-row flex-xl-row">

                       </div>
                       <div class="d-flex flex-row pt-3 pb-3 justify-content-between">
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
                       <div class="d-flex flex-column border-top p-3 flex-sm-row flex-md-row flex-lg-row">
                           <div class="d-flex flex-column blimg  border-right">
                               <div class="d-flex mb-3 flex-row">
                                   <img src="{{asset('img/tof.jpg')}}" alt="" class="imglist d-flex">
                                   <div class="d-flex flex-column ml-3 mt-3">
                                       <span class="d-flex text-bold">Fernando</span>
                                       <span class="d-flex">37 ans</span>
                                   </div>
                               </div>
                               <span class="d-flex flex-row"><i class="fa fa-star text-green d-flex m-2"></i> <span class="d-flex pt-1">4/5 - 4 avis</span></span>
                           </div>
                           <div class="d-flex flex-row justify-content-between  ">
                               <div class="d-flex">1</div>
                               <div class="d-flex">2</div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection