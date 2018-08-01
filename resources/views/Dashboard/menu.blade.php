<div class="container-fluid">
    <div class="menu-top">
        <ul class="nav nav-tabs">
            <a href="#" role="presentation" class="nav-link {{ $page === 'home' ? 'active' : ''}}">
                Tableau de Bord
            </a>
            <a href="#" role="presentation" class="nav-link {{ $page === 'message' ? 'active' : ''}}">
                Messages
            </a>
            <a href="#" role="presentation" class="nav-link {{ $page === 'none' ? 'active' : ''}}">
                #none
            </a>
        </ul>
    </div>
    <div class="menu-left">
        <div class="card col-md-2">
            <div class="card-header">
                Profil
            </div>
            <div class="card-body list-group">
                <a class="list-group-item" href="">Informations Personnelles</a>
                <a class="list-group-item" href="">Photo</a>
                <a class="list-group-item" href="">Preferences</a>
                <a class="list-group-item" href="">Verifications</a>
                <a class="list-group-item" href="">Adresse postale</a>
            </div>
        </div>
        <div class="card col-md-2">
            <div class="card-header">
                Avis
            </div>
            <div class="card-body list-group">
                <a class="list-group-item" href="">Avis recus</a>
                <a class="list-group-item" href="">Avis laisses</a>
            </div>
        </div>
        <div class="card col-md-2">
            <div class="card-header">
                Compte
            </div>
            <div class="card-body list-group">
                <a class="list-group-item" href="">Virements en attente</a>
                <a class="list-group-item" href="">Bons plans</a>
                <a class="list-group-item" href="">Paiements effectues</a>
                <a class="list-group-item" href="">Notifications</a>
                <a class="list-group-item" href="">Mot de passe</a>
                <a class="list-group-item" href="">Fermeture de compte</a>
            </div>
        </div>
    </div>

</div>