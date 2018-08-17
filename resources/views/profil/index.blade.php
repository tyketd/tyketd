@extends('layouts.profilLayout')

@section('contentprofil')
    <div class="row" id="Profil" data-page="Profil">
        <div class="  col-12 col-xs-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
            @include('profil.leftmenu', ['activeLink' => isset($activeLink) ? $activeLink : 'general'])
        </div>
        <div class=" mb-4 col-12 col-xs-12 col-sm-12 col-md-8 col-xl-9 col-lg-9">
            <div class="pl-3 d-flex flex-column">
                <div class="d-flex pb-1 border-bottom">
                    <h4>Informations personnelles</h4>
                </div>
                <div class="mt-1 p-3 d-flex flex-column border-bottom-0 mt-3 card-header">
                    <div class="d-flex flex-row mb-2">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Genre</span></span>
                        <span class="d-flex ml-2">Homme</span>
                    </div>
                    <div class="d-flex flex-column mb-2   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Prenom</span></span>
                        <input type="text" class="ml-2 p-1 d-flex inputfirstpart" value="DEXTER MORGAN" >
                    </div>
                    <div class="d-flex flex-column mb-5   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Nom</span></span>
                        <input type="text" class="ml-2 p-1 d-flex inputfirstpart" value="KWATCHIEU PAUL" >
                    </div>
                    <div class="d-flex flex-column mb-2   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">E-mail</span></span>
                        <div class="d-flex ml-2 flex-row">
                            <input type="email" class=" p-1 d-flex inputsecondpart" value="Gthiryd@gmail.com" >
                            <i class="d-flex m-2 fa text-green  fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-5   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Numero</span></span>

                        <select name="select" class="ml-2 p-1 d-flex inputfirstpart" id="">
                            <option value="1">Belgique (+32) </option>
                            <option value="2">Belgique (+32) </option>
                            <option value="3">Belgique (+32) </option>
                        </select>
                        <div class="ml-2   d-flex flex-row">
                            <input type="text" class="d-flex p-1 inputfirstpart" value="04125485297" >
                            <i class="d-flex m-2 fa text-green fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-3   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Année de naissance </span></span>

                        <select name="select" class="ml-2 p-1 d-flex inputfirstpart" id="">
                            <option value="1">1910 </option>
                            <option value="2">1962 </option>
                            <option value="3">1652 </option>
                        </select>
                    </div>
                    <div class="d-flex flex-column mb-3   flex-lg-row flex-xl-row">
                        <span class="d-flex flex-row mr-2 sizetext justify-content-end"><span class="d-flex">Minibio </span></span>

                        <div class="d-flex ml-2 flex-column">
                            <div class="d-flex flex-row descripbio p-2 mb-2">
                                <i class="d-flex fa fa-info-circle m-1"></i>
                                <span class="d-flex ">Présentez-vous aux autres membres(10 caractères minimum)</span>
                            </div>
                            <div class="d-flex flex-column   flex-lg-row flex-xl-row">
                                <textarea name="text" id="" class="d-flex inputsecondpart" text="lorem ipsum de lor si un poco de la bid for each membre" rows="4"></textarea>
                                <div class="d-flex flex-column descbindicaton ml-2">
                                    <span class="d-flex pb-2 text-bold">Ne pas indiquer de :</span>
                                    <span class="d-flex pb-2">Numéro de téléphone</span>
                                    <span class="d-flex pb-2">Détails sur votre compte facebook</span>
                                    <span class="d-flex pb-2">Détails sur des trajets en particulier</span>
                                </div>
                            </div>
                            <div class="d-flex ml-2 mt-5 mb-5">
                                <button   class=" btn btn-primary" value="">Enregister</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
