@extends('layouts.app')

@section('content')
   <div class=" welcome" id="Welcome" data-page="Welcome">
       <div class="header-slide " style="background-image: url('{{asset('img/delivery.jpg')}}') ">
           <div class="container">
               <div class="flex-column">
                   <div class="d-flex justify-content-center">
                       <span class="header-slide-content-title">Livraison par les voyageurs <span>en toute sécurité</span></span>
                   </div>
                   <div class="d-flex header-slide-content-filter justify-content-center">
                       <div class="fliter-form">
                           <form action="" class="d-flex flex-column flex-md-row">
                               <div class="d-flex p-1 p-md-1">LIVRAISON DE </div>
                               <img src="{{asset('img/m1.png')}}" class="d-flex hide-mobile hidden-md" alt="img">
                               <div class="d-flex p-1 p-md-1"><input type="text" class="form-control " placeholder="Pays ou ville"></div>
                               <div class="d-flex p-1 p-md-1">A </div>
                               <img src="{{asset('img/m2.png')}}" class="d-flex hide-mobile hidden-md" alt="img">
                               <div class="d-flex p-1 p-md-1"><input type="text" class="form-control " placeholder="Pays ou ville"></div>
                               <div class="d-flex p-1 p-md-1"><button type="button" class="btn btn-outline-primary">Trouver un voyageur</button></div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        <div class=" wel-body pb-5">
            <div class="container">
                <div class="row wel-body-part1 pt-5">
                    <div class="col-md-12 col-lg hide-mobile">
                        <img src="{{asset('img/tr1.png')}}" alt="">
                    </div>
                    <div class="col-md-12 col-lg d-flex flex-column wel-body-part1-desc">
                    <span class="d-flex p-2 desc">
                        Vous prenez le volant ? <br>
                        Dites nous ou vous allez !
                    </span>
                    <span class="desc2 p-2">
                        Profitez d'un trajet a moindre coût
                    </span>
                        <span class="d-flex p-2"><a href="#" class=" link">Proposez un trajet</a></span>
                    </div>
                </div>
                <div class="row wel-body-part2 pt-5">
                    <div class="col-md-6 col-lg-4 col-sm-12 flex-column">
                        <img src="{{asset('img/pr21.png')}}" alt="" class="d-lex">
                        <span class="title d-flex p-2">Nouveau! Partager d'ou vous êtes</span>
                    <span class="d-flex pl-2 pr-2 pt-2 pb-0 hide-mobile  descrip">
                        Votre trajet commence la ou il ya une route
                    </span>
                        <a class="d-flex pl-2 pb-2 pt-0" href="#">En savoir plus</a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 flex-column">
                        <img src="{{asset('img/pr22.png')}}" alt="" class="d-lex">
                        <span class="title d-flex p-2">Nouveau! Plus de passagers sur votre route</span>
                    <span class="d-flex pl-2 pr-2 pt-2 pb-0 hide-mobile  descrip">
                        Desormais, votre trajet sera visible par la plus part des passagers
                    </span>
                        <a class="d-flex pl-2 pb-2 pt-0" href="#">En savoir plus</a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 flex-column">
                        <img src="{{asset('img/pr23.png')}}" alt="" class="d-lex">
                        <span class="title d-flex p-2">Nouveau! Bon plan exclusivement pour vous: passez a l'électricité verte et moins cher avec Total spring</span>
                    <span class="d-flex pl-2 pr-2 pt-2 pb-0 hide-mobile  descrip">
                       Blablacar vous propose de benéficier d'une remise de 10% sur les prix HT
                    </span>
                        <a class="d-flex pl-2 pb-2 pt-0" href="#">En savoir plus</a>
                    </div>
                </div>
            </div>

        </div>

   </div>
@endsection