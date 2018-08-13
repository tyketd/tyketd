@extends('layouts.profilLayout')

@section('contentprofil')
    <div class="row" id="verificationProfil" data-page="verificationProfil">
        <div class="order-1 order-sm-0 order-md-0 order-lg-0 order-xl-0  col-12 col-xs-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
            @include('profil.leftmenu', ['activeLink' => isset($activeLink) ? $activeLink : 'Verifications'])
        </div>
        <div class="order-0 order-sm-1 order-md-1 mb-4 order-lg-1 order-xl-1 col-12 col-xs-12 col-sm-12 col-md-8 col-xl-9 col-lg-9">
            <div class="pl-3 d-flex flex-column">
                <div class="d-flex pb-1 border-bottom">
                    <h4>Vérifications</h4>
                </div>
                <div class=" d-flex flex-column  mt-3 ">
                    <span class="d-flex text-bold">
                        Ajouter une photo ! Cela rassurera les autres membres et vous trouverez plus facilement un covoiturage. Les
                        photos permmettent aussi aux membres de se reconnaitre
                    </span>
                    <div class=" mb-3 d-flex  mt-3 flex-column">
                        <div class="border d-flex mb-3  flex-row p-2 itemverifie justify-content-between">
                            <div class="d-flex flex-column">
                                <span class="d-flex pb-2 text-bold">E-mail vérifié</span>
                                <span class="d-flex mr-2">Votre email est ythgdv@gmail.com <a class="ml-2" href="#"> Modifier</a></span>
                                <span>Votre e-mail a bien été vérifié</span>
                            </div>
                            <div class="d-flex flex-row justify-content-center mr-5 mt-3">
                                <i  class="fa fa-check-circle text-green"></i>
                            </div>
                        </div>
                        <div class="border d-flex flex-row p-2 mb-3 itemverifie justify-content-between">
                            <div class="d-flex flex-column">
                                <span class="d-flex pb-2 text-bold">Téléphone vérifié</span>
                                <span class="d-flex mr-2">Votre numéro de téléphone est : +44 585 125 412 <a class="ml-2" href="#"> Modifier</a></span>
                                <span>Votre numéro de téléphone a bien été vérifié</span>
                            </div>
                            <div class="d-flex flex-row justify-content-center mr-5 mt-3">
                                <i  class="fa fa-check-circle text-green"></i>
                            </div>
                        </div>
                        <div class="border d-flex flex-column flex-lg-row  flex-xl-row p-2  justify-content-between">
                            <div class="d-flex flex-column">
                                <span class="d-flex pb-2 text-bold"> <i class="ml-2 mr-2 mt-1 text-red fa fa-info-circle"></i> Faites vérifier votre pièce d'identité</span>
                                <span class="d-flex mr-2">les autres membres auront plus envie de voyager avec vous .</span>
                            </div>
                            <div class="d-flex flex-row justify-content-center mr-2 mt-3">
                                <input type="button" class="btn btn-primary p-2 bg-blue" value="Faire vérifier votre pièce d'identidé">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
