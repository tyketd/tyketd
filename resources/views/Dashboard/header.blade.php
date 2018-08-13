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
                    <li class="nav-link {{ $page === 'trajet' ? 'active' : ''}}">
                        <a href="#" role="presentation" class="">
                            Trajets publiés
                        </a>
                    </li>
                    <li class="nav-link {{ $page === 'Reservation' ? 'active' : ''}}">
                        <a href="{{ route('reservation') }}" role="presentation" class="">
                            Mes reservations
                        </a>
                    </li>
                    <li class="nav-link {{ $page === 'Messages' ? 'active' : ''}}">
                        <a href="#" role="presentation" class="">
                            Messages
                        </a>
                    </li>
                    <li class="nav-link {{ $page === 'Alertes' ? 'active' : ''}}">
                        <a href="#" role="presentation" class="">
                            Alertes
                        </a>
                    </li>
                    <li class="nav-link {{ $page === 'account' ? 'active' : ''}}">
                        <a href="{{ route('dashboard.account') }}" role="presentation" class="">
                            profil </a>
                    </li>
                    <li class="nav-link {{ $page === 'none' ? 'active' : ''}}">
                        <a href="#" role="presentation" class="">
                            Argent
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
