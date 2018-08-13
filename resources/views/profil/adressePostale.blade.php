@extends('layouts.profilLayout')

@section('contentprofil')
    <div class="row" id="adressePostal" data-page="AdressePostal">
        <div class="order-1 order-sm-0 order-md-0 order-lg-0 order-xl-0  col-12 col-xs-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
            @include('profil.leftmenu', ['activeLink' => isset($activeLink) ? $activeLink : 'Adresse'])
        </div>
        <div class="order-0 order-sm-1 order-md-1 mb-4 order-lg-1 order-xl-1 col-12 col-xs-12 col-sm-12 col-md-8 col-xl-9 col-lg-9">
            <div class="pl-3 d-flex flex-column">
                <div class="d-flex pb-1 border-bottom">
                    <h4>Adresse Postal</h4>
                </div>
                <div class="mt-1 p-3 d-flex flex-column border-bottom-0 mt-3 card-header">
                    <div class="d-flex text-bold mb-2">
                        Nous ne diffuserons jamais votre adresse postale sur nos plateformes.
                    </div>
                    <div class="d-flex flex-row mb-2">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Prénom</span></span>
                        <span class="d-flex ml-2">JOEL NEGRI</span>
                    </div>
                    <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row mb-4">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Nom</span></span>
                        <div class="d-flex flex-column ml-2">
                            <span class="d-flex mb-2">FILIFACKDJOU</span>
                            <span class="d-flex mb-3">Changez votre nom et votre prénom depuis <a href="{{route('monprofil')}}"class="pl-2">votre profil</a></span>
                            <input type="email" class=" p-1 d-flex inputsecondpart"  placeholder="Exemple : 8 rue Valtaire" >
                            <span class=" confaddre">Nous avons simplement besoin d'une adresse possible postale pour que la facteur vous trouve.</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-2   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Numéro et nom de rue</span></span>
                        <input type="text" class="ml-2 p-1 d-flex inputsecondpart" >
                    </div>
                    <div class="d-flex flex-column mb-2   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Complément d'adresse <br> (optionnel)</span></span>
                        <input type="text" class="ml-2 p-1 d-flex inputsecondpart" placeholder="Bâtiment, numéro d'appartement ..." >
                    </div>
                    <div class="d-flex flex-column mb-2   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Code postal</span></span>
                        <input type="text" class="ml-2 p-1 d-flex inputsecondpart" >
                    </div>
                    <div class="d-flex flex-column mb-2   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Ville</span></span>
                        <input type="text" class="ml-2 p-1 d-flex inputsecondpart" >
                    </div>
                    <div class="d-flex flex-column mb-2   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Pays</span></span>
                        <div class="d-flex flex-column">
                            <input type="text" class="ml-2 p-1 d-flex inputsecondpart"  value="FR">
                            <div class="d-flex mb-3 ml-2 mt-2">
                                <input type="button" class="btn btn-primary bg-blue" value="Enregistrer">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
