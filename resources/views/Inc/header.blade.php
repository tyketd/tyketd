<div class="container">
    <div class="row header-nav p-2">
        <div class="col-sm d-flex flex-lg-column flex-row">
            <img class="d-flex  logo" src="{{asset('img/logo.png')}}" alt="">
            <span  class="slogan d-flex hide-tablete hide-mobile">Transport de colis entre particulier</span>
        </div>
        <div class="col-sm">
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

        <div class="col-sm d-flex flex-row link-auth">
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

        </div>
    </div>

</div>

