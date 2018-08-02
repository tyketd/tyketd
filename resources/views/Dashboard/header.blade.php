<div class="container-fluid">
    <div class="top-menu">
        <ul class="nav nav-tabs">
            <li class="nav-link {{ $page === 'home' ? 'active' : ''}}">
                <a href="{{ route('dashboard') }}" role="presentation" class="">
                Tableau de Bord
                </a>
            </li>
            <li class="nav-link {{ $page === 'account' ? 'active' : ''}}">
                <a href="{{ route('dashboard.account') }}" role="presentation" class="">
                Mon profil
            </li>
            <li class="nav-link {{ $page === 'none' ? 'active' : ''}}">
                <a href="#" role="presentation" class="">
                #none
            </a>
        </ul>
    </div>
</div>
