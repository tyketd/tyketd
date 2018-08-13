<div id="headerdash">
    <div class="container">
        <div class="mt-3 pt-3">
            <div class="top-menu">
                <ul class="nav nav-tabs">
                    <li class="nav-link {{ $page === 'home' ? 'active' : ''}}">
                        <a href="{{ route('dashboard') }}" role="presentation" class="">
                            Tableau de Bord
                        </a>
                    </li>
                    <li class="nav-link hide-mobile   {{ $page === 'trajet' ? 'active' : ''}}">
                        <a href="#" role="presentation" class="">
                            Trajets publiés
                        </a>
                    </li>
                    <li class="nav-link hide-mobile  {{ $page === 'Reservation' ? 'active' : ''}}">
                        <a href="{{ route('reservation') }}" role="presentation" class="">
                            Mes reservations
                        </a>
                    </li>
                    <li class="nav-link hide-mobile  {{ $page === 'Messages' ? 'active' : ''}}">
                        <a href="#" role="presentation" class="">
                            Messages
                        </a>
                    </li>
                    <li class="nav-link hide-mobile  {{ $page === 'Alertes' ? 'active' : ''}}">
                        <a href="#" role="presentation" class="">
                            Alertes
                        </a>
                    </li>
                    <li class="nav-link hide-mobile hide-tablete {{ $page === 'Profil' ? 'active' : ''}}">
                        <a href="{{ route('monprofil') }}" role="presentation" class="">
                            Profil </a>
                    </li>
                    <li class="nav-link hide-mobile hide-tablete {{ $page === 'none' ? 'active' : ''}}">
                        <a href="#" role="presentation" class="">
                            Argent
                        </a>
                    </li>
                    <li class="nav-link hidden-lg p-1 hidden-md hide-mobile ">
                        <div class="dropdown dropleft mt-1">
                            <button class="  bg-gray text-green dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{--<i class="fa fa-chevron-circle-down"></i>--}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('monprofil') }}" role="presentation" >Profil</a>
                                <a class="dropdown-item" href="#">Argent</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-link hidden-lg p-1 hidden-md hide-tablete ">
                        <div class="dropdown dropleft mt-1">
                            <button class="    bg-gray text-green dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{--<i class="fa fa-chevron-circle-down"></i>--}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" role="presentation" >Trajets publiés</a>
                                <a class="dropdown-item" href="{{ route('reservation') }}" role="presentation" >Mes reservations</a>
                                <a class="dropdown-item" href="#" role="presentation" >Messages</a>
                                <a class="dropdown-item" href="#" role="presentation" >Alertes</a>
                                <a class="dropdown-item" href="{{ route('monprofil') }}" role="presentation" >Profil</a>
                                <a class="dropdown-item" href="#">Argent</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
