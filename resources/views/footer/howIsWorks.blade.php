@extends('layouts.app')

@section('content')
    <div id="HowIsWork" data-page="HowIsWork" class="page">
        @include('Inc.header')
        <div class="container">
            <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3" style="margin-bottom: 15px">
	<!-- Start list items -->
		<div class="list-group" id="group">
		 			 <button type="button" class="list-group-item list-group-item-action active">
		    			Comment ça marche
		 			 </button>
		  			 <button type="button" class="list-group-item list-group-item-action">Confiance et sérénité</button>
		 			 <button type="button" class="list-group-item list-group-item-action">Entre femmes</button>
		 			 <button type="button" class="list-group-item list-group-item-action">Les avis</button>
		  			 <button type="button" class="list-group-item list-group-item-action">Niveau d'expérience</button>
		  			 <button type="button" class="list-group-item list-group-item-action">Conseils prévéntion</button>
		</div>
	</div>	
	<div class="list-group group-list col-sm-8 col-lg-9 border-primary" >
		<h3 style="	height:60px;margin-bottom:5px">Comment ça marche ?</h3>
		<table class="table no-border">
			<tr>
				<td>
					<nav class="nav nav-pills nav-fill " id="table-ti">
  						<a class="nav-select nav-item nav-link border-bottom-0 active" href="#">
  							<b>Vous êtes passager ?</b><br>
  							<i class="fa fa-caret-right" aria-hidden="true"></i>
  							Réservez une place
  						</a>
  						<a class="nav-select nav-item nav-link border-bottom-0" href="#">
  							<b>Vous êtes conducteur ?</b><br>
  							<i class="fa fa-caret-right" aria-hidden="true"></i>
  							proposer vos places
  						</a>
            		</nav>
				</td>
			</tr>
			<tr>
				<td class="bg-primary" style="height: 50px; color:#fff; font-size:18px">Simple et économique : réservez facilement votre place en ligne et voyager moins cher, en toute confiance. Même en dernière minute !</td>
	 		</tr>
	 		<tr>
	 			<td style="padding:0px">
	 				<img src="{{asset('img/howItWorks.jpg')}}" class="img-fluid" alt="Responsive image">
	 			</td>
	 		</tr>
		</table>
		<div class="row">
			<div class="col-md-6 media white-box">
				 <i class="fa fa-search text-muted" aria-hidden="true" style="padding-right:5px"> </i>
                 <div class="media-body">
      				<h5 class="">1.<a href=""> Recherchez </a>votre trajet</h5>
    					Précisez simplement votre destination, votre point de départ et vos horaires. Puis choisissez un trajet qui vous convient ! Si vous avez besoin de plus renseignements vous pouvez ecrire aux conducteurs avant de réservez.
  				</div>
			</div>
			<div class="col-md-6 media box-light">
				 <img class="" src="{{asset('img/ampoule.jpg')}}" alt="">
                 <div class="media-body">
      				<h5 class=""></h5>
    					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  				</div>
			</div>

			<div class="col-md-6 media white-box">
				 <i class="fa fa-check text-muted" aria-hidden="true" style="padding-right:5px"> </i>
                 <div class="media-body">
      				<h5 class="">2.<a href=""> Recherchez </a>votre trajet</h5>
    					Précisez simplement votre destination, votre point de départ et vos horaires. Puis choisissez un trajet qui vous convient ! Si vous avez besoin de plus renseignements vous pouvez ecrire aux conducteurs avant de réservez.
  				</div>
			</div>
			<div class="col-md-6 media box-light">
				 <img class="" src="{{asset('img/ampoule.jpg')}}" alt="">
                 <div class="media-body">
      				<h5 class=""></h5>
    					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  				</div>
			</div>

			<div class="col-md-6 media white-box">
				 <i class="fa fa-taxi text-muted" aria-hidden="true" style="padding-right:5px"> </i>
                 <div class="media-body justify-text">
      				<h5 class="">3.<a href=""> Recherchez </a>votre trajet</h5>
    					Précisez simplement votre destination, votre point de départ et vos horaires. Puis choisissez un trajet qui vous convient ! Si vous avez besoin de plus renseignements vous pouvez ecrire aux conducteurs avant de réservez.
  				</div>
			</div>
			<div class="col-md-6 media box-light">
				 <img class="" src="{{asset('img/ampoule.jpg')}}" class="img-fluid" alt="">
                 <div class="media-body text-justify">
      				<h5 class=""></h5>
    					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  				</div>
			</div>
		</div>    
	</div>	
                   
            </div>
        </div>
    </div>


@endsection