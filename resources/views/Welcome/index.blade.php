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
       <div class="header-slide" style="background-image: url('{{asset('img/delivery.jpg')}}') ">

       </div>
   </div>
@endsection