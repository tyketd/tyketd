@extends('base')

@section('content')
   <div class=" welcome">
       <div class=" container">
           <div class="row header-nav p-2">
               <div class="col-sm flex-column">
                   <img class="d-flex  logo" src="{{asset('img/logo.png')}}" alt="">
                   <span  class="slogan d-flex">Transport de colis entre particulier</span>
               </div>
               <div class="col-sm">
                   <div class="flex-column">
                       <div class="d-flex header-text justify-content-end "><span >Rentablissez votre voyage !  <i class="glyphicon glyphicon-pencil"> </i> </span></div>
                       <div class="d-flex flex-row p-2 header-btn">
                           <div class="d-flex langue p-2">
                               <img src="{{asset('img/flagfr.png')}}" alt="">
                           </div>
                           <div class="d-flex"><button type="button" class="btn btn-outline-primary">Trouver un voyageur</button></div>
                           <div class="d-flex"><button class="btn btn-primary" type="submit">Publier un trajet</button></div>
                       </div>
                   </div>
               </div>
               <div class="col-sm d-flex flex-row link-auth">
                   <a href="#" class="d-flex p-2">Inscription</a>
                   <a href="#" class="d-flex p-2">Connexion</a>
               </div>
           </div>

       </div>
       <div class="header-slide " style="background-image: url('{{asset('img/delivery.jpg')}}') ">
           <div class="container">
               <div class="flex-column">
                   <div class="d-flex justify-content-center">
                       <span class="header-slide-content-title">Livraison par les voyageurs <span>en toute sécurité</span></span>
                   </div>
                   <div class="d-flex header-slide-content-filter justify-content-center">
                       <div class="fliter-form">
                           <form action="" class="d-flex flex-row">
                               <div class="d-flex p-2">LIVRAISON DE </div>
                               <img src="{{asset('img/m1.png')}}" class="d-flex " alt="img">
                               <div class="d-flex p-2"><input type="text" class="form-control " placeholder="Pays ou ville"></div>
                               <div class="d-flex p-2">A </div>
                               <img src="{{asset('img/m2.png')}}" class="d-flex " alt="img">
                               <div class="d-flex p-2"><input type="text" class="form-control " placeholder="Pays ou ville"></div>
                               <div class="d-flex p-2"><button type="button" class="btn btn-outline-primary">Trouver un voyageur</button></div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        <div class=" wel-body pb-5">
            <div class="container">
                <div class="row wel-body-part1 pt-5">
                    <div class="col-sm">
                        <img src="{{asset('img/tr1.png')}}" alt="">
                    </div>
                    <div class="col-sm d-flex flex-column wel-body-part1-desc">
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
                    <div class="col-4 flex-column">
                        <img src="{{asset('img/pr21.png')}}" alt="" class="d-lex">
                        <span class="title d-flex p-2">Nouveau! Partager d'ou vous êtes</span>
                    <span class="d-flex pl-2 pr-2 pt-2 pb-0   descrip">
                        Votre trajet commence la ou il ya une route
                    </span>
                        <a class="d-flex pl-2 pt-0" href="#">En savoir plus</a>
                    </div>
                    <div class="col-4 flex-column">
                        <img src="{{asset('img/pr22.png')}}" alt="" class="d-lex">
                        <span class="title d-flex p-2">Nouveau! Plus de passagers sur votre route</span>
                    <span class="d-flex pl-2 pr-2 pt-2 pb-0   descrip">
                        Desormais, votre trajet sera visible par la plus part des passagers
                    </span>
                        <a class="d-flex pl-2 pt-0" href="#">En savoir plus</a>
                    </div>
                    <div class="col-4 flex-column">
                        <img src="{{asset('img/pr23.png')}}" alt="" class="d-lex">
                        <span class="title d-flex p-2">Nouveau! Bon plan exclusivement pour vous: passez a l'électricité verte et moins cher avec Total spring</span>
                    <span class="d-flex pl-2 pr-2 pt-2 pb-0  descrip">
                       Blablacar vous propose de benéficier d'une remise de 10% sur les prix HT
                    </span>
                        <a class="d-flex pl-2 pt-0" href="#">En savoir plus</a>
                    </div>
                </div>
            </div>

        </div>
       <footer class="pt-5 footer">
           <div class="container pb-2">
               <div class="row f-part1">
                   <div class="col-md-3 col-sm-12 flex-column justify-content-center">
                       <a href="#" class="d-flex p-2">Comment ça marche </a>
                       <a href="#" class="d-flex p-2">Contact</a>
                   </div>
                   <div class="col-md-3 col-sm-12 flex-column justify-content-center">
                       <a href="#" class="d-flex p-2">Qui sommes nous ? </a>
                       <a href="#" class="d-flex p-2">Conditions générales</a>
                   </div>
                   <div class="col-md-3 col-sm-12 flex-column justify-content-center">
                       <a href="#" class="d-flex p-2">Foire aux questions </a>
                       <a href="#" class="d-flex p-2">Nous recrutons</a>
                   </div>
                   <div class="col-md-3 col-sm-12 flex-column justify-content-center">
                       <div class="d-flex p-2 flang flex-column">
                           <span class="d-flex"> Langue </span>  <span class="d-flex description">Français (Belgique)</span>
                       </div>
                       <div class="d-flex flex-row p-2">
                           <img src="{{asset('img/facebook.png')}}" alt="" class="d-flex p-2">
                           <img src="{{asset('img/twitter.png')}}" alt="" class="d-flex p-2">
                           <img src="{{asset('img/insta.png')}}" alt="" class="d-flex p-2">
                           <img src="{{asset('img/youtube.png')}}" alt="" class="d-flex p-2">
                       </div>
                   </div>
               </div>
               <div class="row">
                   <span class="copyright p-2">TYKETD, 2018 @</span>
               </div>
           </div>
           <div class="f-part2">
               <div class="container">
                   <div class="row">
                       <div class="p-2 info">
                           TYKETD est le premier reseau de covoiturage au monde, plus besoin d'aller en ville pour quitter la ville :
                           nous allons en relation passagers et conducteurs prêts à partager leur trajet en voiture pour leur permettre d'aller partout
                           , et sans changement.

                       </div>
                   </div>
               </div>
           </div>
       </footer>
   </div>
@endsection