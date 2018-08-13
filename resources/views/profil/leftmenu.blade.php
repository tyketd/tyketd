<div id="leftmenu">
    <div class=" leftmenu mb-4">
        <div class=" border card-header">
            Profil
        </div>
        <div class="card-body  p-0 list-group">
            <a class="list-group-item {{ $activeLink === 'general' ? 'active': '' }}" href="{{ route('monprofil') }}">Informations Personnelles</a>
            <a class="list-group-item {{ $activeLink === 'Photo' ? 'active': '' }}" href="">Photo</a>
            <a class="list-group-item {{ $activeLink === 'Preferences' ? 'active': '' }}" href="">Preferences</a>
            <a class="list-group-item {{ $activeLink === 'Verifications' ? 'active': '' }}" href="">Verifications</a>
            <a class="list-group-item {{ $activeLink === 'Adresse' ? 'active': '' }}" href="">Adresse postale</a>
        </div>
    </div>
    <div class=" leftmenu mb-4">
        <div class="border card-header">
            Avis
        </div>
        <div class="card-body p-0 list-group">
            <a class="list-group-item {{ $activeLink === 'Avis-recus' ? 'active': '' }}" href="">Avis recus</a>
            <a class="list-group-item {{ $activeLink === 'Avis-laisses' ? 'active': '' }}" href="">Avis laisses</a>
        </div>
    </div>
    <div class=" leftmenu mb-4">
        <div class="border card-header">
            Compte
        </div>
        <div class="card-body p-0 list-group">
            <a class="list-group-item {{ $activeLink === 'Virements' ? 'active': '' }}" href="">Virements en attente</a>
            <a class="list-group-item {{ $activeLink === 'Bons' ? 'active': '' }}" href="">Bons plans</a>
            <a class="list-group-item {{ $activeLink === 'Paiements' ? 'active': '' }}" href="">Paiements effectues</a>
            <a class="list-group-item {{ $activeLink === 'Notifications' ? 'active': '' }}" href="">Notifications</a>
            <a class="list-group-item {{ $activeLink === 'Mot' ? 'active': '' }}" href="">Mot de passe</a>
            <a class="list-group-item {{ $activeLink === 'Fermeture' ? 'active': '' }}" href="">Fermeture de compte</a>
        </div>
    </div>
</div>
