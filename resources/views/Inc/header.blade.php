<div class="" id="header" data-page="Hedear">
    <div class="pos-f-t hidden-sm hidden-lg hidden-md">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark d-flex flex-column justify-content-center">
                <a href="#" class="d-flex text-white p-2 flex-row "><span>Trouver un voyageur</span></a>
                <a href="#" class="d-flex text-white p-2 flex-row  "><span>Publier un trajet</span></a>
                @guest
                <a class="d-flex text-white p-2 flex-row r" href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
                <a  class="d-flex text-white p-2 flex-row " href="{{ route('register') }}"><span>{{ __('Register') }}</span></a>
                <a  class="d-flex text-white p-2 flex-row " href="{{ route('dashboard') }}"><span>Tableau de bord</span></a>
                <a  class="d-flex text-white p-2 flex-row " href=""><span>Trajets publiés</span></a>
                <a  class="d-flex text-white p-2 flex-row " href="{{ route('reservation') }}"><span>Mes reservations</span></a>
                <a  class="d-flex text-white p-2 flex-row " href=""><span>Messages</span></a>
                <a  class="d-flex text-white p-2 flex-row " href=""><span>Alertes</span></a>
                <a  class="d-flex text-white p-2 flex-row " href="{{ route('monprofil') }}"><span>Profil</span></a>
                <a  class="d-flex text-white p-2 flex-row " href=""><span>Virements en attente</span></a>
                <a  class="d-flex text-white p-2 flex-row " href=""><span>Payements effectués</span></a>
                <a  class="d-flex text-white p-2 flex-row " href="{{route('createcolis')}}"><span>Demande de transport colis</span></a>

                    <a class="d-flex text-white p-2 flex-row " href="{{ route('dashboard') }}"><span>Dashboard</span></a>
                    <a class="d-flex  text-white p-2 flex-row " href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span>{{ __('Logout') }}</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                <a  class="d-flex  text-white p-2 flex-row " href="{{ route("locale",["locale"=>"fr"]) }}"><span>{{ __('welcome.locale') }}</span></a>
            </div>
        </div>
        <nav class="navbar text-black navbar-white bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-black"><i class="fa fa-bars m-2" aria-hidden="true"></i></span>
            </button>
            <span  class="text-black">Rentablissez votre voyage !  </span>
        </nav>
    </div>
    <div class="container pb-1">
        <div class="row header-nav p-2">
            <div class="col-sm d-flex  flex-row align-items-center">
                <img class="d-flex  logo" src="{{asset('img/logoT.png')}}" alt="">
                <span  class="slogan d-flex pl-2 ">Transport de colis entre particulier</span>
            </div>
            <div class="col-sm hidden-xs">
                <div class="flex-column">
                    <div class="d-flex header-text justify-content-end "><span >Rentablissez votre voyage !  <i class="glyphicon glyphicon-pencil"> </i> </span></div>
                    <div class="d-flex flex-column flex-md-row p-2 header-btn">
                        <div class="d-flex langue p-2">
                            <img height="64" src="{{asset('img/flagfr.png')}}" alt="">
                        </div>
                        <div class="d-flex"><button type="button" class="btn btn-outline-primary">Trouver un voyageur</button></div>
                        <div class="d-flex"><button class="btn btn-primary" type="submit">Publier un trajet</button></div>
                    </div>
                </div>
            </div>

            <div class="col-sm d-flex flex-row link-auth hidden-xs">
                @guest
                <a class="d-flex p-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a  class="d-flex p-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                @else
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    @endguest
                    <a  class="d-flex p-2" href="{{ route("locale",["locale"=>"fr"]) }}">{{ __('welcome.locale') }}</a>
                    <div class="imgprofile">
                        <a href="" class="btnopenmenu"><img src="{{asset('img/tof.jpg')}}" alt=""></a>
                        <span class="rednotificationnumber circlered">5</span>
                        <div class="detailmenu flex-column">
                            <a href="{{ route('dashboard') }}" class="d-flex p-2 ">Tableau de bord <span class="rednotif circlered">3</span></a>
                            <a href="" class="d-flex p-2">Trajets publiés</a>
                            <a href="{{ route('reservation') }}" class="d-flex p-2">Mes reservations</a>
                            <a href="" class="d-flex p-2">Messages</a>
                            <a href="" class="d-flex p-2">Alertes <span class="rednotif circlered">2</span></a>
                            <a href="{{ route('monprofil') }}" class="d-flex p-2">Profil</a>
                            <a href="" class="d-flex p-2">Virements en attente</a>
                            <a href="" class="d-flex p-2">Payements effectués</a>
                            <a href="{{route('createcolis')}}" class="d-flex p-2">Demande de transport colis</a>
                            <a href="" class="d-flex p-2">Se deconnecter</a>
                        </div>
                    </div>

            </div>
        </div>

    </div>
<div class="backdrop"></div>
</div>

