<div class="card leftmenu">
    <div class="card-header">
        Profil
    </div>
    <div class="card-body list-group">
        <a class="list-group-item {{ $activeLink === 'general' ? 'active': '' }}" href="{{ url('/dashboard/account/general') }}">Informations Personnelles</a>
        <a class="list-group-item {{ $activeLink === 'Photo' ? 'active': '' }}" href="">Photo</a>
        <a class="list-group-item {{ $activeLink === 'Preferences' ? 'active': '' }}" href="">Preferences</a>
        <a class="list-group-item {{ $activeLink === 'Verifications' ? 'active': '' }}" href="">Verifications</a>
        <a class="list-group-item {{ $activeLink === 'Adresse' ? 'active': '' }}" href="">Adresse postale</a>
    </div>
</div>
<div class="card leftmenu">
    <div class="card-header">
        Avis
    </div>
    <div class="card-body list-group">
        <a class="list-group-item {{ $activeLink === 'Avis-recus' ? 'active': '' }}" href="">Avis recus</a>
        <a class="list-group-item {{ $activeLink === 'Avis-laisses' ? 'active': '' }}" href="">Avis laisses</a>
    </div>
</div>
<div class="card leftmenu">
    <div class="card-header">
        Compte
    </div>
    <div class="card-body list-group">
        <a class="list-group-item {{ $activeLink === 'Virements' ? 'active': '' }}" href="">Virements en attente</a>
        <a class="list-group-item {{ $activeLink === 'Bons' ? 'active': '' }}" href="">Bons plans</a>
        <a class="list-group-item {{ $activeLink === 'Paiements' ? 'active': '' }}" href="">Paiements effectues</a>
        <a class="list-group-item {{ $activeLink === 'Notifications' ? 'active': '' }}" href="">Notifications</a>
        <a class="list-group-item {{ $activeLink === 'Mot' ? 'active': '' }}" href="">Mot de passe</a>
        <a class="list-group-item {{ $activeLink === 'Fermeture' ? 'active': '' }}" href="">Fermeture de compte</a>
    </div>
</div>
