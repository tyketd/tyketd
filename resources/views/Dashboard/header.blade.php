<div class="container-fluid">
    <div class="top-menu">
        <ul class="nav nav-tabs">
            <a href="{{ route('dashboard') }}" role="presentation" class="nav-link {{ $page === 'home' ? 'active' : ''}}">
                Tableau de Bord
            </a>
            <a href="{{ route('dashboard.account') }}" role="presentation" class="nav-link {{ $page === 'account' ? 'active' : ''}}">
                Mon profil
            </a>
            <a href="#" role="presentation" class="nav-link {{ $page === 'none' ? 'active' : ''}}">
                #none
            </a>
        </ul>
    </div>
</div>
