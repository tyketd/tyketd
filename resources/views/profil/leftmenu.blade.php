<div id="leftmenu" class="d-flex flex-column">
    <div class="d-flex flex-column leftmenu mb-4">
        <div class="d-flex border card-header">
            <a  data-toggle="collapse" href="#collapseprofil" role="button" class="text-black" >Profil</a>
        </div>
        <div class="card-body d-flex  p-0" >
            <div class="list-group w-100 collapse multi-collapse show-sm show-md show-lg" id="collapseprofil">
                <a class="list-group-item {{ $activeLink === 'general' ? 'active': '' }}" href="{{ route('monprofil') }}">Informations Personnelles</a>
                <a class="list-group-item {{ $activeLink === 'Photo' ? 'active': '' }}" href="{{route('photoProfil')}}">Photo</a>
                <a class="list-group-item {{ $activeLink === 'Preferences' ? 'active': '' }}" href="">Preferences</a>
                <a class="list-group-item {{ $activeLink === 'Verifications' ? 'active': '' }}" href="{{route('verificationProfil')}}">Verifications</a>
                <a class="list-group-item {{ $activeLink === 'Adresse' ? 'active': '' }}" href="{{route('adressePostale')}}">Adresse postale</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column leftmenu mb-4">
        <div class="border d-flex card-header">
              <a  data-toggle="collapse" href="#collapseAvis" role="button" class="text-black" >Avis</a>
        </div>
        <div class="card-body p-0 d-flex  " >
            <div class=" w-100 list-group collapse multi-collapse show-sm show-md show-lg" id="collapseAvis">
                <a class="list-group-item {{ $activeLink === 'avisRecu' ? 'active': '' }}" href="{{route('avisRecu')}}">Avis recus</a>
                <a class="list-group-item {{ $activeLink === 'avisLaisse' ? 'active': '' }}" href="{{route('avisLaisse')}}">Avis laisses</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column leftmenu mb-4">
        <div class="border d-flex card-header">
              <a  data-toggle="collapse" href="#collapseCompte" role="button" class="text-black" >Compte</a>
        </div>
        <div class="card-body d-flex p-0"  >
            <div class="w-100 list-group collapse multi-collapse show-sm show-md show-lg" id="collapseCompte">
                <a class="list-group-item {{ $activeLink === 'Virements' ? 'active': '' }}" href="">Virements en attente</a>
                <a class="list-group-item {{ $activeLink === 'Bons' ? 'active': '' }}" href="">Bons plans</a>
                <a class="list-group-item {{ $activeLink === 'Paiements' ? 'active': '' }}" href="">Paiements effectues</a>
                <a class="list-group-item {{ $activeLink === 'Notifications' ? 'active': '' }}" href="">Notifications</a>
                <a class="list-group-item {{ $activeLink === 'Mot' ? 'active': '' }}" href="">Mot de passe</a>
                <a class="list-group-item {{ $activeLink === 'Fermeture' ? 'active': '' }}" href="">Fermeture de compte</a>
            </div>
        </div>
    </div>
</div>
